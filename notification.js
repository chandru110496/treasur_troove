class Notifications {
	constructor(id, settings = {}) {
		const { labelText, buttonIcon, maxLength } = settings;
		this.id = id;
		this.el = document.getElementById(id);
		this.button = document.createElement("button");
		this.listWrap = document.createElement("div");
		this.list = document.createElement("ol");
		this.noNewNotificationsEl = document.createElement("p");
		this.markAllAsReadButton = document.createElement("button");
		this.viewAllNotificationsLink = document.createElement("a");
		this.labelText = labelText || "notifications";
		this.buttonIcon = buttonIcon || "☎";
		this.maxLength = maxLength || 5;
	}
	
	init() {
		this.setAttributes();
		this.build();
	}
	
	setAttributes() {
		this.el.className = "notifications";
		
		this.button.setAttribute("type", "button");
		this.button.setAttribute("aria-expanded", "false");
		this.button.setAttribute("aria-label", `${this.unread || "0"} unread ${this.labelText}`);
		this.button.setAttribute("aria-controls", `${this.id}-list`);
		this.button.setAttribute("id", `${this.id}-button`)
		this.button.className = "notifications-button";
		
		this.listWrap.setAttribute("id", `${this.id}-list`);
		this.listWrap.className = "notifications-list";
		
		this.markAllAsReadButton.setAttribute("type", "button");
		this.markAllAsReadButton.setAttribute("aria-controls", `${this.id}-list`);
		this.markAllAsReadButton.className = "notifications-clear";
		this.markAllAsReadButton.innerText = "Mark all as read";
		
		this.noNewNotificationsEl.className = "notifications-empty";
		this.noNewNotificationsEl.innerText = "No new notifications.";
		
		this.viewAllNotificationsLink.setAttribute("href", "#");
		this.viewAllNotificationsLink.className = "notifications-all";
		this.viewAllNotificationsLink.innerText = "View all";
		
		this.handleClick();
		this.handleClear();
	}
	
	build() {
		const buttonText = document.createElement("span");
		const wrapper = document.createElement("div");
		
		buttonText.setAttribute("aria-hidden", "true");
		buttonText.innerText = this.buttonIcon;
		
		this.button.appendChild(buttonText);
		this.el.appendChild(this.button);
		this.el.appendChild(this.listWrap);
		this.listWrap.appendChild(wrapper);
		wrapper.appendChild(this.markAllAsReadButton);
		wrapper.appendChild(this.list);
		wrapper.appendChild(this.noNewNotificationsEl);
		wrapper.appendChild(this.viewAllNotificationsLink);
	}
	
	updateCounter = () => {
		this.button.setAttribute("aria-label", `${this.unread} unread ${this.labelText}`);
		if (this.unread === 0) {
			this.button.removeAttribute("data-unread");
		} else {
			this.button.dataset.unread = this.unread;
		}
	}
	
	limitUnreadList = () => {
		if (this.unread > this.maxLength) {
			this.list.querySelector(`li:nth-child(${this.maxLength})`).style.display = "none";
		}
	}
	
	animateCounter = () => {
		this.button.classList.add("has-new-notification");
		setTimeout(() => {
			this.button.classList.remove("has-new-notification");
		}, 150);
	}
	
	showNotifications(doShow = true) {
		this.button.setAttribute("aria-expanded", `${doShow}`);
	}
	
	handleClick = () => {
		this.button.addEventListener("click", e => {
			this.showNotifications(!this.isExpanded);
		});
	}
	
	handleClear = () => {
		this.markAllAsReadButton.addEventListener("click", e => {
			this.list.innerHTML = "";
			this.updateCounter();
		});
	}
	
	// add a notification to the top of the list
	addNotification = content => {
		const li = document.createElement("li");
			
		this.list.insertAdjacentElement("afterbegin", li);
		li.innerHTML = content;
		this.updateCounter();
		this.limitUnreadList();
	}
	
	// sends a notification with a desktop/mobile popup
	sendNotification(content) {
		this.popupNotification(content);
		this.addNotification(content);
		this.animateCounter();
	}
	
	// Notification API
	popupNotification = content => {
		if (!("Notification" in window)) {
			// Check if the browser supports notifications
			alert("This browser does not support desktop notification");
		} else if (Notification.permission === "granted") {
			// Check whether notification permissions have already been granted;
			// if so, create a notification
			const notification = new Notification(content);
			// …
		} else if (Notification.permission !== "denied") {
			// We need to ask the user for permission
			Notification.requestPermission().then((permission) => {
				// If the user accepts, let's create a notification
				if (permission === "granted") {
					const notification = new Notification(content);
					// …
				}
			});
		}
	}
	
	get isExpanded() {
		return this.button.getAttribute("aria-expanded") === "true";
	}
	
	get unread() {
		return this.list.childElementCount;
	}
	
	get notifications() {
		return this.list.map(item => item.innerHTML);
	}
	
	set notifications(array) {
		this.list.innerHTML = "";
		array.forEach(content => {
			const li = document.createElement("li");
			
			this.list.appendChild(li);
			li.innerHTML = content;
		});
		this.updateCounter();
	}
}

const fetchQuote = async () => {
	try {
		const api = await fetch("https://api.quotable.io/random?maxLength=40");
		const data = await api.json();

		return data.content;
	} catch(error) {
		return error;
  }
}

document.addEventListener("DOMContentLoaded", async () => {
	const n = new Notifications("n");
	const quote = await fetchQuote();
	
	n.init();
	n.showNotifications();
	n.addNotification(quote);
	document
		.getElementById("send")
		.addEventListener("click", async () => {
			const addQuote = await fetchQuote();
		
			n.sendNotification(addQuote);
		});
});
