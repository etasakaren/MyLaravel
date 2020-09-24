@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque euismod eros. Ut dolor arcu, imperdiet ut neque quis, porttitor hendrerit ante. Morbi sit amet nisl nisi. Cras sagittis arcu nec felis facilisis mattis. Phasellus pharetra sem ut neque mattis, tincidunt tincidunt massa sagittis. Nullam ultricies, ex ac lacinia iaculis, massa sapien viverra nisl, non efficitur orci erat quis nulla. Sed mattis dolor viverra augue malesuada tincidunt. In elementum sem at ante elementum tempus sit amet quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tristique lectus et quam egestas, vel vehicula libero porta. Sed leo neque, cursus in nulla nec, molestie ultricies risus. Praesent scelerisque quis tellus vitae ultrices. Cras vitae sagittis massa, vitae viverra nunc. In dignissim commodo eros, eu consequat tortor aliquam a. Vivamus eu posuere nisl.</p>    
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection