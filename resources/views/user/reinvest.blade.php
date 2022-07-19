@extends('layout.userdashboard')
@section('content')
            <div class="page-displayer">
                <p class="header">Wallet address </p>
                <div class=" overview-container animate__animated animate__bounceInDown">
<<<<<<< HEAD
                    @foreach($wallet as $wallets)
                    <div class="error-message">
                        <p>{{ $wallets->name }}</p>
                        <p>{{ $wallets->address }} <span class="fa-solid fa-copy address" style="color:purple;margin:0.2rem"></span></p>
                    </div>
                    @endforeach
=======
                    <p class="error-message">Purchase and upgrade your plans here.</p>
                    <p class="error-message">Purchase and upgrade your plans here.</p>
                    <p class="error-message">Purchase and upgrade your plans here.</p>
>>>>>>> cf44f3ed0681801f029a709446b72c299f752a99
                </div>
                <p class="header">invest</p>

                @if(count($approval) > 0)

                    <div class=" overview-container animate__animated animate__bounceInUp reinvest-plan-container" style="display:flex; justify-content:space-between">
                        <p>your purchase approval is proccessing...</p>
                    </div>

                @else

                @if(count($invest) > 0)
                     <div class=" overview-container animate__animated animate__bounceInUp reinvest-plan-container" style="display:flex; justify-content:space-between">
                        <p>you have a running investment...</p>
                    </div>
                @else
                <div class=" overview-container animate__animated animate__bounceInUp reinvest-plan-container mainframe">

                    <div class="frame">

                    </div>
                </div>

                <div class=" overview-container animate__animated animate__bounceInUp reinvest-plan-container" style="display:flex; justify-content:space-between">
                    <div>
                        <p>choose a plan to purchase</p>
                        <form action="{{ route('user.reinvest') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <select name="plans" name="plan" class="select-plan">
                            @foreach($plans as $plan)
                            <option value="{{ $plan->amount }}">{{ $plan->name }} - {{ $plan->amount }} USDT</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                    <p>Upload prove of payment</p>
                    <p class="err"></p>
                    <input type="file" name="file" class="file" required>
                    <button type="submit" style="background-color:purple;border:0;padding:1rem;color:white; margin-top:0.5rem;">Previewed and Upload</button>
                    </div>
                </div>
                @endif

                @endif

            </div>
            <script>
                let err = document.querySelector('.err');
                let file = document.querySelector(".file");
                let main = document.querySelector(".mainframe");

                //copy address

                let address = document.querySelectorAll(".address");

                console.log(address);

                address.forEach((data) => {
                    data.addEventListener('click',function(e){ 
                        navigator.clipboard.writeText( e.target.parentElement.textContent);
                        alert("wallet address has been copied to the clipboard");
                    })
                })

                main.style.display = "none";
                file.nextElementSibling.style.display = "none";
                let frame = document.querySelector(".frame");
                file.addEventListener("change",(e)=>{
                        //console.log(e.target.files[0].type);
                    if(e.target.files[0].type !== 'image/jpeg'){
                         return err.innerHTML= "Invalid file type";
                    }
                        err.innerHTML = "";
                         console.log(e.target.files[0]);

                         let reader = new FileReader();

                         reader.readAsDataURL(e.target.files[0]);

                         reader.addEventListener("load",(e)=>{
                             console.log(e);
                            frame.innerHTML = `
                            <center style="margin-bottom:0.5rem;">Preview</center>
                            <center>
                            <img src="${e.target.result}" height="400" width="400">
                            </center>
                            `;
                         })

                    main.style.display = "block";
                    file.nextElementSibling.style.display = "block";

                })
            </script>
    @endsection

