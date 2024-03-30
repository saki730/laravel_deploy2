
<!-- 本: 削除ボタン -->
<div class="card w-97 bg-base-100 shadow-xl">
  <div class="card-body">
  <div>{{ $slot }}</div>
  
  <div style="display: flex;">
    <form action="{{ url('booksedit/'.$id) }}" method="POST">
        @csrf
        <button type="submit" class="btn bg-blue-500 rounded-lg">
            更新
        </button>
    </form>

    
    
    <form action="{{ url('dashboard/'.$id) }}" method="POST">
         @csrf
         @method("DELETE")
        
        <button type="submit"  class="btn bg-blue-500 rounded-lg">
            削除
        </button>
        
     </form>
</div>

</div>