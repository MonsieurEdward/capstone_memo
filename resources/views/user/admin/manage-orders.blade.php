@php
use Carbon\Carbon;
@endphp

<x-layout :useDatatableCDN="true">

    <x-header></x-header>

    <div class="w-full bg-[#FEF6E4] flex justify-start">

        <x-nav-user></x-nav-user>

        <main class="w-5/6">

            <div class="bg-[#ffdab9] shadow-md pt-24 px-10 pb-4  flex justify-between">
                <div class="font-bold text-xl">
                    Manage Orders
                </div>
                <a href="/cakes">
                    <button type="button" class="p-2 rounded-md bg-[#F55447] text-white shadow-md font-semibold hover:bg-red-500 active:scale-95 flex items-center gap-2">
                        <svg
                        class="w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#fff" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/>
                        </svg>
                        <span>Create Order</span>
                    </button>
                </a>
            </div>

            <div class="p-5">

                <div class="bg-gray-50 rounded-lg h-fit shadow-md shadow-gray-500">

                    <div class="p-5">

                        <div class="flex">
                            <ul class="flex cursor-pointer w-fit relative text-sm">
                                <li id="reset-filter" class="order-tab px-5 pt-2 pb-4 font-semibold hover:text-[#F55447] z-20 border-b-2 border-red-500 bg-[#eedee4] rounded-t-lg text-red-500">All Orders</li>
                                <li id="filter-pending" class="order-tab px-5 pt-2 pb-4 font-semibold hover:text-[#F55447] z-20">Pending</li>
                                <li id="filter-baking" class="order-tab px-5 pt-2 pb-4 font-semibold hover:text-[#F55447] z-20">Baking</li>
                                <li id="filter-receive" class="order-tab px-5 pt-2 pb-4 font-semibold hover:text-[#F55447] z-20">To Receive</li>
                                <li id="filter-review" class="order-tab px-5 pt-2 pb-4 font-semibold hover:text-[#F55447] z-20 ">To Review</li>
                                <li id="filter-completed" class="order-tab px-5 pt-2 pb-4 font-semibold hover:text-[#F55447] z-20">Completed</li>
                                <li id="filter-canceled" class="order-tab px-5 pt-2 pb-4 font-semibold hover:text-[#F55447] z-20">Canceled</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 rounded-b-xl rounded-tr-xl border shadow-md p-3">
                            <table id="order_all" class="display border-collapse w-full table-fixed">
                                <thead>
                                    <tr class="border-y-2">
                                        <th class=" w-20">Item no.</th>
                                        <th class=" w-20">Order no.</th>
                                        <th class=" w-auto">Customer Name</th>
                                        <th class=" w-auto">Cake Name</th>
                                        <th class=" w-auto">Date Ordered</th>
                                        <th class=" w-28">Total</th>
                                        <th class=" w-28">Status</th>
                                        {{-- <th class=" w-auto">Delivery Date</th> --}}
                                        <th class=" w-28">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($allOrders as $order)
                                        {{-- @php
                                            // use Carbon\Carbon;
                                            $formattedTime = Carbon::parse($order->order->prefered_time)->format('H:i');
                                            $formattedDate = Carbon::parse($order->order->prefered_date)->format('F d, Y');
                                        @endphp --}}
                                        <tr class="orderDetails border-b" data-order="{{ json_encode($order) }}">
                                            <td class="cursor-pointer text-center">{{ $order->id }}</td>
                                            <td class="cursor-pointer text-center">{{ $order->order->id }}</td>
                                            <td class="cursor-pointer text-center">{{ $order->order->user->first_name }} {{ $order->order->user->last_name }}</td>
                                            <td class="cursor-pointer text-center">{{ $order->cake->name }} x{{ $order->quantity }}</td>
                                            <td class="cursor-pointer text-center">{{ $order->created_at->diffForHumans() }}</td>
                                            <td class="cursor-pointer text-center">{{ $order->sub_total }}</td>
                                            <td class="cursor-pointer text-center">{{ $order->status }}</td>
                                            {{-- <td class="cursor-pointer text-center">{{ $formattedDate }} <br> {{ $formattedTime }}</td> --}}
                                            <td class="py-2 text-center">
                                                <button type="button" class="text-white text-xs py-1 px-3 rounded-md shadow-md bg-[#F55447] cursor-pointer active:scale-95">
                                                    Next &Gt;
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

        </main>
    </div>

    @session('success')
        <x-response-success>{{ session('success') }}</x-response-success>
    @endsession

    <x-order-full-detail></x-order-full-detail>

    <script src="/js/manage_order.js" defer></script>

</x-layout>
