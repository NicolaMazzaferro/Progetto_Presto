// counter Stefano
if(document.querySelector('#firstNumber') && document.querySelector('#secondNumber') && document.querySelector('#thirdNumber') && document.querySelector('#fourthNumber') ){
    let firstNumber = document.querySelector('#firstNumber');
    let secondNumber = document.querySelector('#secondNumber');
    let thirdNumber = document.querySelector('#thirdNumber');
    let fourthNumber = document.querySelector('#fourthNumber');


    function createInterval(total, element, timing){
        let counter = 0;
        // element.innerHTML = counter;
    
        let interval = setInterval(()=>{
    
            if(counter < total){
                counter++
                element.innerHTML = counter;
            }else{
                clearInterval(interval);
            }
        }, timing);
    }
    
    let check = true;
    let observer = new IntersectionObserver( (entries) =>{
    
        entries.forEach((entry)=>{
            if(entry.isIntersecting && check){
                createInterval(35, firstNumber, 50);
                createInterval(150, secondNumber, 10);
                createInterval(3500, thirdNumber, 1);
                createInterval(1250, fourthNumber, 2);
                check=false;
                setTimeout(()=>{
                    check = true
                },17000)
            }
        })
    } );
    
    observer.observe(firstNumber);
    observer.observe(secondNumber);
    observer.observe(thirdNumber);
    observer.observe(fourthNumber);



}

