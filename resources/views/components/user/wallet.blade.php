    <!-- deposition pabel -->

    @props(['approve','address'])

    <div class="hidden depoContent absolute bg-black top-0 left-0 right-0 bottom-0 bg-opacity-50 p-4 w-full h-full" draggable="true">
        <div class="mx-auto container md:w-6/12 w-10/12 bg-white h-6/12 mt-20 p-2">

            <div class="flex justify-between items-center mx-4 my-6 border-b-2 border-b-blue-400">
                <p>Fund Account</p>
                <span class="fa-solid fa-x terminate" onClick="terminate()"></span>
            </div>

            <div class="flex flex-col mx-4">
                <p class="text-blue-700">Wallet-Address:</p>
                <span class="inline-block text-blue-700"></span>
                <p class="text-gray-500 border md:w-7/12 w-full text">bc1q48dfktqykv7syxqtvy0rdkdnhj3h89f0mp748q <span class="fa-solid fa-copy md:ml-4 ml-1 copy">  Bitcoin</span></p>
                <p class="text-gray-500 border md:w-7/12 w-full text">0x15314cFaB1fD3D66F4C57Bee39BB2c522adF28F6 <span class="fa-solid fa-copy md:ml-4 ml-1 copy">  Ethereum</span></p>
                <p class="text-gray-500 border md:w-7/12 w-full text">0xA6072FE97039B33F73552Eca88d8A31Af1dE6A1d <span class="fa-solid fa-copy md:ml-4 ml-1 copy">  USDT</span></p>
               <script>

                   let copy = document.querySelector('.copy');
                   let text = document.querySelector('.text');

                   copy.addEventListener('click',function(){
                       navigator.clipboard.writeText(text.textContent);
                       text.previousElementSibling.innerHTML = "copied !!!"
                   })

                </script>
            </div>
            @if($approve > 0)
                <p class="mx-4 my-6 text-center text-blue-600">Your payment validation request is being processed ...</p>
            @else
            <p class="err text-red-600 mx-4 my-4"></p>
            <div class="flex md:flex-row flex-col justify-between mx-4 my-6">
                <div class="flex flex-row md:flex-col">
                    <p>USDT </p>
                    <p> (TRC20)</p>
                </div>
                <div class="">
                    <input type="number" class="p-4 focus:outline-none amount border "placeholder="Amount">
                     <input type="hidden" class="p-4 focus:outline-none user_id border " value="{{ auth()->user()->id }}">
                </div>
            </div>

            <div class="flex md:flex-row flex-col justify-around my-4 mx-4">
                <div class="w-full md:w-1/3 text-blue-700">
                    Upload Prove of payment
                </div>
                <div class="w-full md:w-1/2">
                    <input type="file" class="p-4 focus:outline-none file" name="file">
                </div>
            </div>

            <input type="text" placeholder="Transaction ID (Trxid)" name="transaction" class="w-full p-4 border mb-2 focus:outline-blue-500 id">

            <button class="w-full bg-blue-400 py-4 wallet">Deposite</button>
            @endif
        </div>
    </div>

    <!-- end of deposition panel -->

     <div class="hidden withdrawContent box-border absolute bg-black top-0 left-0 right-0 bottom-0 bg-opacity-50 p-4 w-full h-full">
            <div class="mx-auto container md:w-6/12 w-10/12 bg-white h-6/12 mt-20 p-2">

            <div class="flex justify-between items-center mx-4 my-6 border-b-2 border-b-blue-400">
                <p>Withdrawal</p>
                <span class="fa-solid fa-x wterminate"></span>
            </div>
            <button class="bg-blue-600 px-4 py-2 ml-4 mb-2 text-white awallet">+ add wallet</button>
            <p class="ml-4"><span class="font-bold">Recipient Wallet: </span><span class="addr">{{ $address->address ?? " Not Available"}}</span></p>
            <div class="space-y-4">
                <div class="hidden showwallet">
                <input type="text" name="waddress" placeholder="Enter Wallet Address" class="address mt-3 p-2 w-9/12 ml-4 focus:outline-none border"><button class="bg-blue-600 p-2 text-white add">{{ $address ? 'Update':'Add' }}</button>
                </div>
                <p class="text-blue-600 errmsg ml-4"></p>
                <input type="number" name="waddress" placeholder="Enter Amount" class="p-2 w-11/12 ml-4 wamount focus:outline-none border">
                <input type="hidden" class="user_id" value="{{ auth()->user()->id }}">
                </div>
           <button class="w-full bg-blue-400 py-4 wbtn mt-2 with">Withdraw</button>
            </div>
        </div>



    <section>
        <div class="flex flex-col justify-center items-center w-full bg-blue-500 pb-10 space-y-6">
            <p class="text-white">Your Balance </p>
            <p class="font-bold text-2xl">USDT <span class="user_amount">{{ auth('web')->user()->wallet->amount }}</span> </p>
            <div class="flex space-x-3">
                <a href="#" class="bg-white md:px-8 px-4 py-2 deposite"><span class="fa fa-credit-card mx-2"></span>Deposit</a>

                <!-- <a href="#" class="bg-white md:px-8 px-4 py-2"><span class="fa-brands fa-btc mx-2"></span>Buy / Sell</a> -->
                <a href="#" class="bg-white md:px-8 px-4 py-2 withdraw"><span class="fa fa-bank mx-2"></span>Withdraw</a>
            </div>
        </div>
    </section>

    <script>

            let awallet = document.querySelector(".awallet")
            let address = document.querySelector(".address")
            let swallet = document.querySelector(".showwallet");
             let add = document.querySelector(".add");
             let user_id = document.querySelector(".user_id");
             let wbtn = document.querySelector('.wbtn');
             let wamount = document.querySelector('.wamount');
             let err = document.querySelector(".errmsg");
             let addr = document.querySelector(".addr");
             let withdraw = document.querySelector(".with");
              let amount = document.querySelector(".user_amount");




            add.addEventListener("click",function(){

                if(address.value < 5){
                    return console.log("Please enter a valid wallet address");
                }

                let formdata = new FormData();

                formdata.append("address",address.value);
                formdata.append("id",user_id.value);

                fetch("http://localhost:8000/api/user/address",{
                    method:"POST",
                    header:{
                        Accept:'application/json',
                    },
                    body:formdata
                }).then((res) => res.json()).then((val) => {
                    if(val.status === 200){
                        err.innerHTML = 'added successfully'
                        addr.innerHTML = val.data;
                    }

                });
            });

            awallet.addEventListener("click",function(){
                swallet.classList.toggle("hidden")
            })

            // withdrawal

            withdraw.addEventListener('click',function(e){

                if(wamount.value > Number.parseFloat(amount.textContent)){
                    return err.textContent = "Insufficient Fund";
                }else{
                    if(/[1-9]/.test(wamount.value)){
                        return err.textContent = "Invalid value entered";
                    }
                    err.textContent = "Withdrawal request sent successfully"
                }

            })

        </script>
