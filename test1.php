<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sử dụng cdn để nhúng jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="tes1.css"> -->
    <title> Nhập thông tin </title>
</head>

<body class="bg-blue-100">
    <div class="">
        <!-- Phần Forrm -->
        <div id="form" class="border-b border-gray-900/10 pb-8">
            <form class="mt-5 mx-12 bg-blue-300 border-2 border-dashed rounded-md">
                <div class="grid grid-col-1 gap-x-6 gap-y-8 sm:grid-cols-7">
                    <div class="sm:col-span-2">
                        <h1 class="mt-10 text-2xl font-semibold leading-7 text-gray-900 flex items-center justify-center" > Input Information </h1> 
                        <p class="text-sm leading-6 text-gray-600 flex justify-center"> (Mời bạn nhập thông tin) </p>
                    </div>    

                    <div class="sm:col-span-3">
                        <div class="mb-2 sm:mt-8 grid grid-cols-1 gap-x-6 sm:grid-cols-8">
                            <div class="col-span-2">
                                <label class="block text-base text-3xl font-medium leading-8 text-gray-900" for="ipname"> Họ và tên: </label>
                            </div>
                            <div class="col-span-4">
                                <input type="text" class="pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm 
                                                    ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                                                    focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="ipname" placeholder="Nhập vào đây">
                            </div>
                        </div>

                        <div class="mb-2 mt-2 grid grid-col-1 gap-x-6 sm:grid-cols-8">
                            <div class="col-span-2">
                                <label class="block text-base text-3xl font-medium leading-8 text-gray-900" for="ipbirth"> Ngày sinh: </label>
                            </div>
                            <div class="col-span-4">
                                <input type="date" class="pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm
                                                    ring-1 ring-inset ring-gray-300
                                                    focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="ipbirth">
                            </div>
                        </div>

                        <div class="mb-2 mt-2 grid grid-col-1 gap-x-6 sm:grid-cols-8">
                            <div class="col-span-2">
                                <label class="block text-base text-3xl font-medium leading-7 text-gray-900" for="ipsex"> Giới tính: </label>
                            </div>
                            <div class="col-span-5 py-1">
                                <input type="radio" class="ml-2" name="sex" id="ipsex" value="Nam">Nam
                                <input type="radio" class="ml-3" name="sex" id="ipsex1" value="Nữ">Nữ
                                <input type="radio" class="ml-3" name="sex" id="ipsex2" value="Khác">Khác
                            </div>
                        </div>

                        <div class="mb-2 mt-2 grid grid-col-1 gap-x-6 sm:grid-cols-8">
                            <div class="col-span-2">
                                <label class="block text-base text-3xl font-medium leading-7 text-gray-900" for="ipemail"> Email: </label>
                            </div>
                            <div class="col-span-4">
                                <input type="text" class="pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm
                                                    ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                                                    focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="ipemail" placeholder="Nhập vào đây">
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:mt-10 flex flex-col gap-y-2">
                        <div class="">
                            <input  class="relative inline-flex items-center justify-start px-6 py-3 overflow-hidden font-medium 
                                transition-all bg-white rounded hover:bg-white group" type="submit" value="Hoàn thành">
                                
                                <a href="#_" class="relative inline-flex items-center justify-start px-6 py-3 overflow-hidden font-medium 
                                transition-all bg-white rounded hover:bg-white group">
                                <span class="w-48 h-48 rounded rotate-[-40deg] 
                                bg-purple-600 absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all 
                                translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span> 
                                <span class="relative w-full text-left text-black transition-colors duration-300 ease-in-out group-hover:text-white">
                                Hoàn thành </span> </a>
                                
                        </div>
                        <div>
                            <input class="sm:w-[70%] w-[100%] rounded-md hover:bg-gray-400 hover:bg-opacity-30 text-2xl p-2 font-semibold
                                         hover:text-red-700 leading-6 text-gray-700" type="reset" value="Hủy">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Phần Table -->
        <div class="sm:mt-4 flex flex-col">
            <div class="p-2 flex justify-center">
                <h1> Danh sách thành viên </h1>
            </div>
            <div class="border-2 rounded-md mt-2 mx-20 bg-white">
                <table>
                    <thead>
                        <tr>
                            <th> STT </th>
                            <th> Họ và tên </th>
                            <th> Ngày sinh </th>
                            <th> Giới tính </th>
                            <th> Email </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> Vũ Hoàng Anh </td>
                            <td> 21/10/2004 </td>
                            <td> Nam </td>
                            <td> vhanh2k4@gmail.com </td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> Hoàng Lê Nguyên Long </td>
                            <td> 28/6/2004 </td>
                            <td> Nam </td>
                            <td> dragon24@gmail.com </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Thông báo  -->
        <div class="absolute top-[20px] right-[10px]">
            <div id="alert-additional-content-1" class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium">This is a info alert</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    More info about this info alert goes here. 
                </div>
                <div class="flex">
                    <button type="button" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                    View more
                    </button>
                    <button type="button" class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800" data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                    Dismiss
                    </button>
                </div>
            </div>
        </div>

    </div>
</body>

</html>