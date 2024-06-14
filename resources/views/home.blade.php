@role('Admin')
    @include('extra.master')
@endrole
@role('Writer')
    {{-- @include('writer.layouts.app') --}}
    @include('extra.master')
@endrole
@role('Designer')
    {{-- @include('designer.layouts.app') --}}
    @include('extra.master')
@endrole
@role('User')
    @include('extra.master')
@endrole


