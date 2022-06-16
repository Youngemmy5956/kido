<section class="pac">
    <div class="flex flex-col md:flex-row justify-evenly items-center space-x-2 w-full mb-4">
    </div>
  
</section>
<input type="hidden" value="{{ auth('web')->user()->investment->package ?? 'no' }}" class="package">
<script>

  window.addEventListener("load",function(){
    let section = document.querySelector('.pac');
    let package = document.querySelector('.package');

    fetch("http://localhost:8000/api/user/package",{
      method:'get'
    }).then((res) => res.json()).then((val) => {
       let data = val.map((res) => {
        return ` 
                            <div class="md:w-4/12 w-full flex flex-col justify-center border space-y-10 text-center">
                                <span class="block fa fa-${res.name == package.value ? 'unlock' : 'lock'} text-5xl mt-6"></span>
                                    <p class="text-3xl">${res.amount}</p>
                                    <div class="flex flex-col justify-start text-left mx-6 space-y-2">
                                    ${res.content.split(',').map((da) => {
                                      return `<p><span class="fa-solid fa-check text-green-400 border border-green-400 rounded-full p-2 mx-2"></span>${da}</p>`
                                    }).join('')}
                                    </div>
                                      <a href="/user/activate/${res.name}"class="w-full bg-green-400 py-2 text-white">Activate</a>
                            </div>
                       `
        });
      section.firstElementChild.innerHTML = data.join('');
    });

  })

</script>