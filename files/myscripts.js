
document.addEventListener( 'keydown', function( event ){

	if( 'TEXTAREA' !== event.target.tagName )
		return

	// not tab
	if( event.code !== 'Tab' )
		return

	event.preventDefault()

	// Opera, FireFox, Chrome
	let textarea     = event.target
	let selStart     = textarea.selectionStart
	let selEnd       = textarea.selectionEnd
	let before       = textarea.value.substring( 0, selStart )
	let slection     = textarea.value.substring( selStart, selEnd )
	let after        = textarea.value.substr( selEnd )
	let slection_new = ''

	// remove TAB indent
	if( event.shiftKey ){

		// fix selection
		let selectBefore = before.substr( before.lastIndexOf( '\n' ) + 1 )
		let isfix = /^\s/.test( selectBefore )
		if( isfix ){
			let fixed_selStart = selStart - selectBefore.length
			before   = textarea.value.substring( 0, fixed_selStart )
			slection = textarea.value.substring( fixed_selStart, selEnd )
		}

		let once = false 
		slection_new = slection.replace( /^(\t|[ ]{2,4})/gm, ( mm )=>{

			if( isfix && ! once ){
				once = true // do it once - for first line only
				selStart -= mm.length
			}

			selEnd -= mm.length
			return ''
		})
	}
	// add TAB indent
	else {
		selStart++

		// has selection
		if( slection.trim() ){
			slection_new = slection.replace( /^/gm, ()=>{
				selEnd++
				return '\t'
			})
		}
		else {
			slection_new = '\t'
			selEnd++
		}
	}

	textarea.value = before + slection_new + after

	// cursor
	textarea.setSelectionRange( selStart, selEnd )
});