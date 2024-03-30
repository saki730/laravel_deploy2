<x-app-layout>
    <x-slot name="header">

        <!--ヘッダー[START]-->
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
      <!--ヘッダー[END]-->


        <!-- バリデーションエラーの表示に使用-->
        <x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
        <!-- バリデーションエラーの表示に使用-->

        <!--左エリア[START]--> 
        <div class="text-gray-700 text-left px-4 py-4 m-2">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-500 font-bold">
                    ユーザープロフィール
                </div>
            </div>



    
    
 <!--右側エリア[START]-->
<div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
    <!-- 現在の本 -->
    @if ($books->count() > 0)
        @php
            $latestBook = $books->last();
        @endphp
        <x-collection id="{{ $latestBook->id }}">
        <div class="overflow-x-auto">
            <table class="table">
                      <!-- row 1 -->
                       <tr>
                       <th>1</th>
                       <td>在籍年数</td>
                       <td><p>{{ $latestBook->id }}</p></td>
                       </tr>

                        <!-- row 2 -->
                        <tr>
                       <th>2</th>
                       <td>在籍会社名</td>
                       <td><p>{{ $latestBook->name }}</p></td>
                       </tr>

                        <!-- row 3 -->
                        <tr>
                       <th>3</th>
                       <td>業種</td>
                       <td><p>{{ $latestBook->mail }}</p></td>
                       </tr>            

                       <!-- row 4 -->
                       <tr>
                       <th>4</th>
                       <td>職種</td>
                       <td><p>{{ $latestBook->password }}</p></td>
                       </tr>  

                       <!-- row 5 -->
                       <tr>
                       <th>5</th>
                       <td>年齢</td>
                       <td><p>{{ $latestBook->age }}</p></td>
                       </tr>  

                       <!-- row 6 -->
                       <tr>
                       <th>6</th>
                       <td>職務内容</td>
                       <td><p>{{ $latestBook->location }}</p></td>
                       </tr>  

            </table>
        </div>
        </x-collection>
    @endif
</div>
<!--右側エリア[[END]-->

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
                      <input name="id" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" placeholder="">
                    </div>
                    <!-- カラム２ -->
                    <div class="w-full md:w-1/1 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      在籍会社名
                      </label>
                      <input name="name" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!-- カラム３ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      業種
                      </label>
                      <input name="mail" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!-- カラム４ -->
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                     職種
                    </label>
                    <input name="password" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!-- カラム5 -->
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      年齢
                      </label>
                      <input name="age" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="">
                    </div>
                  </div>

                    <!-- カラム6 -->
                      <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    職務内容
                      </label>
                      <input name="location" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                  </div>
               
                  <div class="flex flex-col">
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <x-button class="bg-blue-500 rounded-lg">送信</x-button>
                      </div>
                   </div>
                 </form>
                 </div>
        <!--左エリア[END]--> 


 


    
</x-app-layout>
