// fonction menu déroulant

sfHover = function() {
        var sfEls = document.getElementById("menu_deroulant").getElementsByTagName("LI");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
        }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);


// fonction diapo

var Slideshow = (function() {
	var self = {},
		config = {
			duration: 4,
			container: {
				width: 0,
				height: 0
			}
		};

	setOptions = function() {
		if (typeof options === 'object' &&
			Object.keys(options).length > 0)
		{
			for (var property in options)
			{
				if (config[property] !== undefined)
				{
					config[property] = options[property];
				}
			}
		}
	}
	self.init = function(opts) {
		options = opts || {};

		setOptions();

		execute();
	}
	execute = function() {
		container = document.querySelector('#slideshow-container');
		slideshow = document.querySelector('#slideshow');
		images = Array.from(document.querySelectorAll('.slideshow-image'));

		if ((config.container.width && config.container.height) > 0)
		{
			setContainerStyle();
		}

		i = -1;

		play();
	}
	setContainerStyle = function() {
		container.style.position = 'relative';
		container.style.width = config.container.width + 'px';
		container.style.height = config.container.height + 'px';

		if (config.container.border !== undefined)
		{
			container.style.borderWidth = config.container.border.width + 'px';
			container.style.borderStyle = config.container.border.style;
			container.style.borderColor = config.container.border.color;
		}
	}
	play = function() {
		slideshow.classList.add('fadeOut');

		setTimeout(function() {
			slideshow.style.background = 'url(' + images[i].src + ') center';
			slideshow.style.backgroundSize = 'cover';
			slideshow.classList.remove('fadeOut');
		}, 1000);

		i++;
		if (i == images.length)
		{
			i = 0;
		}
		setTimeout(play, config.duration * 1000);
	}

	return self;
})();


// fonctions saisi formulaire

	function myFocus(idChamp){
		document.getElementById(idChamp).style.backgroundColor = "grey"; 
	}

	function myBlur(idChamp) 
	{
			document.getElementById(idChamp).style.backgroundColor = "white"; 
	}


