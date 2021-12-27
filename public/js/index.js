let toggleBtn = document.querySelector("#navbar-toggle");
let collapse = document.querySelector("#navbar-collapse");
toggleBtn.onclick = () => {
  collapse.classList.toggle("hidden");
  collapse.classList.toggle("flex");
};

function gridView()
{
  var active=document.getElementById("divForm");
    active.className='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-5 gap-y-6 xl:gap-x-20 xl:gap-y-12 mt-10 lg:mt-36'; 

  var x = document.getElementById("divForm").querySelectorAll(".divwrapper");
  var i;
  for (i = 0; i < x.length; i++)
  {
    x[i].className='block';
  }
}

  function listView()
  {
    var active=document.getElementById("divForm");
    active.className='grid grid-cols-1';
  }

  

  