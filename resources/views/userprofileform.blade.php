<x-app-layout>

<プロフィール編集用のフォームを表示する>

         <!-- profile登録部分 -->
      <!-- 
         <form action="{{ url('books/update') }}" method="POST" class="w-full max-w-lg">
    @csrf
      
    -->


    @if (isset($book))
    
    <!-- ここに $book 変数を使用するコードを書く -->

    <p>データ登録された内容表示</p>

                  <div class="flex flex-col px-2 py-2">
                  
            
                  
                  
                <!-- カラム１ -->
                <!--  
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       名前
                      </label>
                      <input name="name" value="{{$book->name}}" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                    </div>

                -->

                  <!-- カラム５ -->
                
                  <!--
                  <div class="flex flex-col">
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <x-button class="bg-blue-500 rounded-lg">更新</x-button>
                      </div>
                   </div>

                 -->
                   @else
                   <p>データ登録してください</p>
                   @endif

                <!-- id値を送信 -->
                
                
                <!--/ id値を送信 -->
            </form>
        </div>
        <!--左エリア[END]--> 

</x-app-layout>
