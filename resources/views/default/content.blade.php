   <div class="col-md-9">

@if(count($data) < 3)
  Hello hello < 3

@elseif(count($data) > 10)
  Вмассиве больше 10 элементов
@else
  Вмассиве  неизвестное кол. элементов
@endif

<ul>
  @for($i=0;$i< count($dataI);$i++)

  <li>{{ $dataI[$i] }}</li>

  @endfor
</ul>

<ul>
  @foreach($data as $k=>$v)

  <li>{{ $k.'=>'.$v }}</li>

  @endforeach
</ul>

<ul>
  @forelse($data as $k=>$v)
  <li>{{ $k.'=>'.$v }}</li>
  @empty
  <p>No items</p>
  @endforelse
</ul>

@while(false)
  <p>Forever</p>
@endwhile

@each('default.list',$dataI,'value')

@myDir('Hello')


<h1>{{ date('d.M.Y',time())}}</h1>





        <div class="row">
      <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
    <div class="row" style="margin-top:100px;">
      <div class="col-md-12">
        <h2 style="margin-bottom:50px;">Sample Blog Post</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
    </div>