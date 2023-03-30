import $ from 'jquery';

export function visibleElement(target){
	var element = document.querySelector(target);
	if ( ! element ) return false;
	var position = element.getBoundingClientRect();
	var full = false;
	var part = false;
	//Checking Element is fully visible in screen
	if(position.top >= 0 && position.bottom <= window.innerHeight) {
		full = true;
	}

	// checking for partial visibility
	if(position.top < window.innerHeight && position.bottom >= 0) {
		part = true;
	}
	return { full, part };
}
