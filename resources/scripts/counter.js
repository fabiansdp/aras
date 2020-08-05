// var onlyOnce = true;
// window.onscroll = function() {countUp()};

// function countUp() {
//     if (onlyOnce) {
        // var 
        //         counting = document.getElementById('counterc'),
        //         counting2 = document.getElementById('counterd'),
        //         counting3 = document.getElementById('countera'),
        //         current2 = counting2.innerText,
        //         current3 = counting3.innerText,
        //         current = counting.innerText,
        //         i = j = k = 0,
        //         step = function() {
        //             i += 513;
        //             counting.innerText = i;
        //             if(i< current) {
        //                 window.setTimeout(step,1);
        //             }
        //         };
        //         step2 = function() {
        //             j += 513;
        //             counting2.innerText = i;
        //             if(j< current2) {
        //                 window.setTimeout(step2,1);
        //             }
        //         };
        //         step3 = function() {
        //             k += 513;
        //             counting3.innerText = i;
        //             if(k< current3) {
        //                 window.setTimeout(step3,1);
        //             }
        //         };
        //         step();step2();step3();
        //         onlyOnce = false;
//     }
// }
var onlyOnce = true;
window.addEventListener('scroll', function() {
	var element = document.querySelector('#covid19');
    var position = element.getBoundingClientRect();

	// checking whether fully visible
	if(position.top >= 0 && position.bottom <= window.innerHeight && onlyOnce== true) {
        console.log('Element is fully visible in screen');
        onlyOnce = false;
            var 
                counting = document.getElementById('counterc'),
                counting2 = document.getElementById('counterd'),
                counting3 = document.getElementById('countera'),
                current2 = counting2.innerText,
                current3 = counting3.innerText,
                current = counting.innerText,
                i = j = k = 0,
                step = function() {
                    i += 513;
                    counting.innerText = i;
                    if(i< current) {
                        window.setTimeout(step,1);
                    }
                };
                step2 = function() {
                    j += 513;
                    counting2.innerText = i;
                    if(j< current2) {
                        window.setTimeout(step2,1);
                    }
                };
                step3 = function() {
                    k += 513;
                    counting3.innerText = i;
                    if(k< current3) {
                        window.setTimeout(step3,1);
                    }
                };
                step();step2();step3();
	}
});