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



  setTimeout(function() {
    $('#alert').fadeOut('fast');
}, 2000); // <-- time in milliseconds







  function decrement(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value--;
    target.value = value;
  }
  function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
  );
  const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
  );
  decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
  });
  incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
  });

  