	</div>
			<!--
			Back To Top
			-->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<!-- UIkit JS -->
			<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit-icons.min.js"></script>

			<!-- UIkit JS -->
			<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
			<script>
			/** Initialize MDC Web components. */
			const buttons = document.querySelectorAll('.mdc-button');
			for (const button of buttons) {
			  mdc.ripple.MDCRipple.attachTo(button);
			}

			const textFields = document.querySelectorAll('.mdc-text-field');
			for (const textField of textFields) {
			  mdc.textField.MDCTextField.attachTo(textField);
			}
				
			
				
			const menu = mdc.menu.MDCMenu.attachTo(document.querySelector('.mdc-menu'));
			menu.setAnchorCorner(mdc.menu.Corner.BOTTOM_LEFT);
			menu.open = false;
			menu.setFixedPosition(true);
			//const btn = document.querySelector('#topAppBarMenu');
//			btn.addEventListener('click', () => {
//				menu.open = !menu.open;
//			}); 
			document.querySelector('#topAppBarMenu').addEventListener('click', () => {
				menu.open = !menu.open;
			});
				
				//var list = document.querySelectorAll( '.mdc-menu-surface--anchor' );
//				Array.prototype.forEach.call(list, function (item) {
//					var menuEl = item.querySelector('#demo-menu');
//					let menu = new mdc.menu.MDCMenu(menuEl);
//					let menuButtonEl = item.querySelector('#menu-button');
//					menuButtonEl.addEventListener('click', function() {
//						menu.open = !menu.open;
//					});
//				});
//				
//				
//				const menuEls = Array.from(document.querySelectorAll('.mdc-menu'));
//
//				menuEls.forEach((menuEl) => {
//				  // Initialize MDCSimpleMenu on each ".mdc-simple-menu"
//				  const menu = new mdc.menu.MDCMenu(menuEl);
//
//				  // We wrapped menu and toggle into containers for easier selecting the toggles
//				  const dropdownToggle = menuEl.parentElement.querySelector('.js--dropdown-toggle');
//				  dropdownToggle.addEventListener('click', () => {
//					menu.open = !menu.open;
//				  });
//
//				  menu.setAnchorCorner(mdc.menu.MDCMenuFoundation.Corner.BOTTOM_START);
//				});



			const drawer = mdc.drawer.MDCDrawer.attachTo(document.querySelector('.mdc-drawer'));

			const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo(document.getElementById('app-bar'));
			topAppBar.setScrollTarget(document.getElementById('main-content'));
			topAppBar.listen('MDCTopAppBar:nav', () => {
			  drawer.open = !drawer.open;
			});


			const lists = document.querySelectorAll('.mdc-list');

			var interactiveListItems = document.querySelectorAll('.mdc-list-item');
			for (var i = 0, li; li = interactiveListItems[i]; i++) {
			  mdc.ripple.MDCRipple.attachTo(li);
			  //// Prevent link clicks from jumping demo to the top of the page
//			  li.addEventListener('click', function(evt) {
//				evt.preventDefault();
//			  });
			}
				
			const selectedIndex = document.querySelectorAll('.mdc-select');
			for (const select of selectedIndex) {
			  mdc.select.MDCSelect.attachTo(select);
			}
			
			select.listen('MDCSelect:change', () => {
			  console.log(select.selectedIndex, select.value);
			});



		</script>
		<script type="text/javascript">
		window.mdc.autoInit();
		</script>
	</body>
</html>