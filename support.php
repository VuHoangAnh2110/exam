<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sử dụng cdn để nhúng jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--  -->
    <script src="./index.js"></script>
    <title> Nhập thông tin </title>
    

</head>

<body class="bg-blue-100">
    <div class="">
        <!-- Phần Forrm -->
        <div id="form" class="border-b border-gray-900/10 pb-8">
            <form id="personForm" method="post" onsubmit="addmember();" class="mt-5 mx-12 bg-blue-300 border-2 border-dashed rounded-md">
                <div class="grid grid-col-1 gap-x-6 gap-y-8 sm:grid-cols-8">
                    <div class="sm:col-span-2">
                        <h1 class="mt-10 text-2xl font-semibold leading-7 text-gray-900 flex items-center justify-center" > Input Information </h1> 
                        <p class="text-sm leading-6 text-gray-600 flex justify-center"> (Mời bạn nhập thông tin) </p>
                    </div>    

                    <div class="sm:col-span-4">
                        <div class="mb-2 sm:mt-8 grid grid-cols-1 gap-x-6 sm:grid-cols-8">
                            <div class="col-span-2">
                                <label class="block text-base text-3xl font-medium leading-8 text-gray-900" for="ipname"> Họ và tên: </label>
                            </div>
                            <div class="col-span-4">
                                <input type="text" class="pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm 
                                                    ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                                                    focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="name" 
                                                    oninput="keychange()" id="ipname" placeholder="Nhập vào đây">
                            </div>

                            <!-- Thông báo -->
                            <div class="col-span-2 mt-2">
                                <span id="err-name" class="text-red-500 text-sm"> * </span>
                            </div>
                        </div>

                        <div class="mb-2 mt-2 grid grid-col-1 gap-x-6 sm:grid-cols-8">
                            <div class="col-span-2">
                                <label class="block text-base text-3xl font-medium leading-8 text-gray-900" for="ipbirth"> Ngày sinh: </label>
                            </div>
                            <div class="col-span-4">
                                <input type="date" class="pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm
                                                    ring-1 ring-inset ring-gray-300
                                                    focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="birth" 
                                                    oninput="keychange()" id="ipbirth">
                            </div>

                            <!-- Thông báo -->
                            <div class="col-span-2 mt-2">
                                <span id="err-birth" class="text-red-500 text-sm"> * </span>
                            </div>
                        </div>

                        <div class="mb-2 mt-2 grid grid-col-1 gap-x-6 sm:grid-cols-8">
                            <div class="col-span-2">
                                <label class="block text-base text-3xl font-medium leading-7 text-gray-900" for="ipsex"> Giới tính: </label>
                            </div>
                            <div class="col-span-4 py-1">
                                <input type="radio" class="ml-2" onclick="keychange()" name="sex" id="ipsex" value="Nam">Nam
                                <input type="radio" class="ml-3" onclick="keychange()" name="sex" id="ipsex1" value="Nữ">Nữ
                                <input type="radio" class="ml-3" onclick="keychange()" name="sex" id="ipsex2" value="Khác">Khác
                            </div>

                            <!-- Thông báo -->
                            <div class="col-span-2 mt-2">
                                <span id="err-sex" class="text-red-500 text-sm"> * </span>
                            </div>
                        </div>

                        <div class="mb-2 mt-2 grid grid-col-1 gap-x-6 sm:grid-cols-8">
                            <div class="col-span-2">
                                <label class="block text-base text-3xl font-medium leading-7 text-gray-900" for="ipemail"> Email: </label>
                            </div>
                            <div class="col-span-4">
                                <input type="text" class="pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm
                                                    ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                                                    focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="email"
                                                    oninput="keychange()" id="ipemail" placeholder="Nhập vào đây">
                            </div>

                            <!-- Thông báo -->
                            <div class="col-span-2 mt-2">
                                <span id="err-email" class="text-red-500 text-sm"> * </span>
                            </div>
                        </div>
                        <h3 id="success"></h3>
                    </div>

                    <div class="sm:col-span-2 sm:mt-10 flex flex-col gap-y-2">
                        <div class="">
                            <input class="sm:w-[70%] w-[100%] rounded-md sm:mt-14 bg-indigo-600 px-3 py-2 text-2xl font-semibold text-white
                                        shadow-sm hover:bg-indigo-400 hover:text-black focus-visible:outline focus-visible:outline-2 
                                        focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type="submit" value="Hoàn thành">
                        </div>
                        <div>
                            <input class="sm:w-[70%] w-[100%] rounded-md hover:bg-gray-400 hover:bg-opacity-30 text-2xl p-2 font-semibold
                                         hover:text-red-700 leading-6 text-gray-700" type="reset" onclick="huyForm()" value="Hủy">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Phần Table -->
        <div class="sm:mt-4 flex flex-col">
            <div class="p-1 flex justify-start sm:mx-20">
                <h1 class="text-lg font-semibold pl-3 text-slate-800"> Danh sách thành viên </h1>
            </div>

            <div class="border-2 rounded-md mt-2 sm:mx-20 relative h-full bg-white overflow-auto 
                        shadow-md rounded-lg bg-clip-border custom-scrollbar">
                <table class="w-full text-left table-auto">
                    <thead >
                        <tr>
                            <th class="p-3 border-b border-slate-200 bg-slate-100"> ID </th>
                            <th class="p-3 border-b border-slate-200 bg-slate-100"> Họ và tên </th>
                            <th class="p-3 border-b border-slate-200 bg-slate-100"> Ngày sinh </th>
                            <th class="p-3 border-b border-slate-200 bg-slate-100"> Giới tính </th>
                            <th class="p-3 border-b border-slate-200 bg-slate-100"> Email </th>
                        </tr>
                    </thead>
                    <tbody id="content">
                        <!-- Xử lý ở đây -->
                    </tbody>
                </table>

                <div class="flex flex-row justify-between">
                    <div id="total" class="mt-5 flex justify-start ml-4 m-5">
                            <!-- total -->
                    </div>

                    <!-- Phân trang -->
                    <div id="pagi" class="flex mr-4 m-5">
                       <!-- Xử lý ở đây -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Thông báo xử lý ở đây -->
    <div>
        <div>

        </div>
    </div>
    
</body>


</html>