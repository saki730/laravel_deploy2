<!-- resources/views/booksedit.blade.php -->
<x-app-layout>

            
        <!-- バリデーションエラーの表示に使用-->
        <x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
        <!-- バリデーションエラーの表示に使用-->
    
    <!--全エリア[START]-->
    <div class="flex bg-gray-100">

        <!--左エリア[START]--> 
        <div class="text-gray-700 text-left px-4 py-4 m-2">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-500 font-bold">
                    プロフィールを管理する
                </div>
            </div>


 
<!--左エリア[END]--> 
            <!-- プロフィール入力欄 -->
            <form action="{{ url('books') }}" method="POST" class="w-full max-w-lg">
                @csrf
                  <div class="flex flex-col px-2 py-2">
                   <!-- カラム１ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      在籍年数
                      </label>
                      <input name="id" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" placeholder="" value="{{ $book->id }}">
                    </div>
                    <!-- カラム２ -->
                    <div class="w-full md:w-1/1 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      在籍会社名
                      </label>
                      <input name="name" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" value="{{ $book->name }}">
                    </div>
                    <!-- カラム３ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      業種
                      </label>
                      <input name="mail" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" value="{{ $book->mail }}">
                  </div>
                    <!-- カラム４ -->
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                     職種
                    </label>
                    <input name="password" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" value="{{ $book->password }}">
                 </div>
                    <!-- カラム5 -->
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      年齢
                      </label>
                      <input name="age" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="" value="{{ $book->age }}">
                    </div>
                  </div>

                    <!-- カラム6 -->
                      <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    職務内容
                      </label>
                      <input name="location" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="" value="{{ $book->location }}">
                    </div>
               
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <x-button class="bg-blue-500 rounded-lg">送信</x-button>
                      </div>
                 </form>
                 </div>
        <!--左エリア[END]--> 



                <!-- id値を送信 -->
                <input type="hidden" name="id" value="{{$book->id}}">
                <!--/ id値を送信 -->
            </form>
        </div>
        <!--左エリア[END]--> 
    
    
    <!-- 右側エリア[START]
    <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
      
    </div> -->
    <!--右側エリア[[END]-->       

</div>
 <!--全エリア[END]-->

</x-app-layout>