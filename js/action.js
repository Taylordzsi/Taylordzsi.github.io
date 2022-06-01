function myFunction()
 {
   

  var x = document.bevitel.darab.value;
  var y = document.bevitel.suly.value;
  var nap = document.bevitel.nap.value;
  var karat = document.bevitel.karat.value;
  var femjel = document.bevitel.femjel.value;

  var au1890 = document.arfolyam.au1890.value;
  var au1830 = document.arfolyam.au1830.value;
  var au1490 = document.arfolyam.au1490.value;
  var au1430 = document.arfolyam.au1430.value;
  var ag92590 = document.arfolyam.ag92590.value;
  var ag92530 = document.arfolyam.ag92530.value;
//18 karátos arany
  if(nap=='90' && karat=='18')
  {
      if(femjel=='mfau')
      {
        var result = (y*au1890);
      }

      if(femjel=='mfnau')
      {
        var result = ((y*au1890)*0.70);
       
      }
      

  }
  if(nap=='30' && karat=='18')
  {
    if(femjel=='mfau')
      {
    var result = (y*au1830);
      }
      if(femjel=='mfnau')
      {
        var result = ((y*au1830)*0.70);
      }
  }

  //14karátos arany
  if(nap=='90' && karat=='14')
  {
    if(femjel=='mfau')
      {
         var result = (y*au1490);
      }
      if(femjel=='mfnau')
      {
         var result = ((y*au1490)*0.70);
      }
  }
  if(nap=='30' && karat=='14')
  {
    if(femjel=='mfau')
      {
         var result = (y*au1430);
      }
    if(femjel=='mfnau')
      {
         var result = ((y*au1430)*0.70);
      }
  }

  //ezüst
  if(nap=='90' && karat=='925')
  {
    if(femjel=='mfag')
      {
        var result = (y*ag92590);
      }
      if(femjel=='mfnag')
      {
        var result = ((y*ag92590)*0.70);
      }
  }
  if(nap=='30' && karat=='925')
  {
    if(femjel=='mfag')
      {
        var result = (y*ag92530);
      }
    if(femjel=='mfnag')
      {
        var result = ((y*ag92530)*0.70);
      }
  
    }
  document.bevitel.becsertek.value = result;
  document.bevitel.rejtett.value = result;
  
  
 
}

function check()
{
    var be =  document.bevitel.becsertek.value;
    var ki =  document.bevitel.rejtett.value;
    if (be>ki)
    {
      
        
        document.getElementById("sub4").style.visibility = "hidden";
        document.getElementById("demo").innerHTML = "Túl magas a becsült összeg";
       
    }
else
{
    document.getElementById("sub4").style.visibility = "visible";
    document.getElementById("demo").innerHTML = "Az összeg értéke OK";
}
}


function calc(){
  let price = 1000;
  let amountInput=document.querySelector('input[name="amount"]');
  let amount=parseInt(amountInput.value)*price;
  let showAmount = document.querySelector("span.show-amount");
  showAmount.innerHTML=amount;

}