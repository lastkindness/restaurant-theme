export default function initDropdown() {
	const menuListItem = document.querySelectorAll( '.site-header-nav-list-item' );

	for ( let i = 0; i < menuListItem.length; i++ ) {
		new HeaderMenuListItem( menuListItem[i]);
	}

	new Dropdown( document.querySelector( '.lang-dropdown' ) );
}

const DROPDOWN_TRANSITION_DURATION = 300;

class HeaderMenuListItem {
	constructor( item ) {
		this.item = item;
		this.parentDropdown = item.querySelector( '.site-header-nav-list-item-dropdown' );

		if ( this.parentDropdown ) {
			this.dropdownPositioningClass = 'left';

			this.initParentDropdown();

			HeaderMenuListItem.recursiveSearchAndInitDropdowns( this.parentDropdown );
		}
	}

	initParentDropdown() {
		const size = this.item.getBoundingClientRect();
		const position = size.left + size.width / 2;

		if ( position > window.innerWidth / 2 ) {
this.dropdownPositioningClass = 'right';
}

		this.parentDropdown.classList.add( this.dropdownPositioningClass );

		new Dropdown( this.parentDropdown );
	}

	static recursiveSearchAndInitDropdowns( dropdown ) {
		const listItems = dropdown.children[0].children;

		for ( let i = 0; i < listItems.length; i++ ) {
			const childDropdown = listItems[i].querySelector( '.site-header-nav-list-item-dropdown' );

			if ( childDropdown ) {
				new Dropdown( childDropdown );

				this.recursiveSearchAndInitDropdowns( childDropdown );
			}
		}
	}
}

class Dropdown {
	constructor( dropdown, triggerItem ) {
		this.dropdown = dropdown;
		this.triggerItem = triggerItem || dropdown.parentNode;

		this.height = 0;
		this.dropdownTimeout = null;

		this.sizeCalc();

		this.mouseEnter = this.mouseEnter.bind( this );
		this.mouseLeave = this.mouseLeave.bind( this );

		this.triggerItem.addEventListener( 'mouseenter', this.mouseEnter );
		this.triggerItem.addEventListener( 'mouseleave', this.mouseLeave );
	}

	mouseEnter() {
		const { dropdown } = this;

		clearTimeout( this.dropdownTimeout );

		dropdown.style.height = this.height + 'px';
		dropdown.style.overflow = 'hidden';

		this.dropdownTimeout = setTimeout( () => {
			dropdown.style.overflow = 'visible';
		}, DROPDOWN_TRANSITION_DURATION );
	}

	mouseLeave() {
		const { dropdown } = this;

		clearTimeout( this.dropdownTimeout );

		dropdown.style.height = 0 + 'px';
		dropdown.style.overflow = 'hidden';
	}

	sizeCalc() {
		const { dropdown } = this;

		this.height = dropdown.querySelector( 'ul' ).offsetHeight;
	}
}
