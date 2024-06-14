const tabsBox = document.querySelector(".tabs-box"),
    allTabs = tabsBox.querySelectorAll(".tab"),
    arrowIcons = document.querySelectorAll(".icon i");

let isDragging = false;

const handleIcons = (scrollVal) => {
    let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
    arrowIcons[0].parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
    arrowIcons[1].parentElement.style.display =
        maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
};

arrowIcons.forEach((icon) => {
    icon.addEventListener("click", () => {
        // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
        let scrollWidth = (tabsBox.scrollLeft += icon.id === "left" ? -340 : 340);
        handleIcons(scrollWidth);
    });
});

allTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        const activeTab = tabsBox.querySelector(".active");
        if (activeTab) {
            activeTab.classList.remove("active");
        }
        tab.classList.add("active");
        // Get the selected category
        // const category = tab.getAttribute("value");
        // console.log("category", category);
        // // Make an AJAX request to fetch filtered influencers
        // fetch(`influencer?category=${encodeURIComponent(category)}`)
        //     .then((response) => response.json())
        //     .then((data) => {
        //         // Update the influencers based on the filtered data
        //         const influencersContainer = document.querySelector(".row");
        //         influencersContainer.innerHTML = ""; // Clear existing influencers

        //         console.log("influencersContainer", influencersContainer);
        //         data.forEach((influencer) => {
        //             const influencerElement = document.createElement("div");
        //             influencerElement.classList.add("col-md-3", "pt-3");
        //             influencerElement.innerHTML = `
        //                 <a href="${influencer.profileUrl}">
        //                     <img class="image" src="${influencer.profilePhoto ? influencer.profilePhoto : 'asset/img/defaultImage.jpg'}" alt="image">
        //                 </a>
        //             `;

        //             influencersContainer.appendChild(influencerElement);
        //         });
        //     })
        //     .catch((error) => {
        //         console.error("Error fetching filtered influencers:", error);
        //     });
    });
});

const dragging = (e) => {
    if (!isDragging) return;
    tabsBox.classList.add("dragging");
    tabsBox.scrollLeft -= e.movementX;
    handleIcons(tabsBox.scrollLeft);
};

const dragStop = () => {
    isDragging = false;
    tabsBox.classList.remove("dragging");
};

tabsBox.addEventListener("mousedown", () => (isDragging = true));
tabsBox.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);

/* ------------------------ Watermark (Please Ignore) ----------------------- */
const createSVG = (width, height, className, childType, childAttributes) => {
    const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");

    const child = document.createElementNS(
        "http://www.w3.org/2000/svg",
        childType
    );

    for (const attr in childAttributes) {
        child.setAttribute(attr, childAttributes[attr]);
    }

    svg.appendChild(child);

    return { svg, child };
};

document.querySelectorAll(".generate-button").forEach((button) => {
    const width = button.offsetWidth;
    const height = button.offsetHeight;

    const style = getComputedStyle(button);

    const strokeGroup = document.createElement("div");
    strokeGroup.classList.add("stroke");

    const { svg: stroke } = createSVG(width, height, "stroke-line", "rect", {
        x: "0",
        y: "0",
        width: "100%",
        height: "100%",
        rx: parseInt(style.borderRadius, 10),
        ry: parseInt(style.borderRadius, 10),
        pathLength: "30"
    });

    strokeGroup.appendChild(stroke);
    button.appendChild(strokeGroup);

    const stars = gsap.to(button, {
        repeat: -1,
        repeatDelay: 0.5,
        paused: true,
        keyframes: [
            {
                "--generate-button-star-2-scale": ".5",
                "--generate-button-star-2-opacity": ".25",
                "--generate-button-star-3-scale": "1.25",
                "--generate-button-star-3-opacity": "1",
                duration: 0.3
            },
            {
                "--generate-button-star-1-scale": "1.5",
                "--generate-button-star-1-opacity": ".5",
                "--generate-button-star-2-scale": ".5",
                "--generate-button-star-3-scale": "1",
                "--generate-button-star-3-opacity": ".5",
                duration: 0.3
            },
            {
                "--generate-button-star-1-scale": "1",
                "--generate-button-star-1-opacity": ".25",
                "--generate-button-star-2-scale": "1.15",
                "--generate-button-star-2-opacity": "1",
                duration: 0.3
            },
            {
                "--generate-button-star-2-scale": "1",
                duration: 0.35
            }
        ]
    });

    button.addEventListener("pointerenter", () => {
        gsap.to(button, {
            "--generate-button-dots-opacity": "1",
            duration: 0.5,
            onStart: () => {
                setTimeout(() => stars.restart().play(), 500);
            }
        });
    });

    button.addEventListener("pointerleave", () => {
        gsap.to(button, {
            "--generate-button-dots-opacity": "0",
            "--generate-button-star-1-opacity": ".25",
            "--generate-button-star-1-scale": "1",
            "--generate-button-star-2-opacity": "1",
            "--generate-button-star-2-scale": "1",
            "--generate-button-star-3-opacity": ".5",
            "--generate-button-star-3-scale": "1",
            duration: 0.15,
            onComplete: () => {
                stars.pause();
            }
        });
    });
});
