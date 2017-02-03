;(function(map) {
	map.fn.resizeImgMap = function() {
		var imageMap = this;

		var resizeImgMap = function() {
			imageMap.each(function() {
				if (typeof(map(this).attr('usemap')) == 'undefined')
					return;

				var that = this,
					Mthat = map(that);

				//Verify the image size after it is loaded
				map('<img />').on('load', function() {
					var attrW = 'width',
						attrH = 'height',
						w = Mthat.attr(attrW),
						h = Mthat.attr(attrH);

					if (!w || !h) {
						var temp = new Image();
						temp.src = Mthat.attr('src');
						if (!w)
							w = temp.width;
						if (!h)
							h = temp.height;
					}

					var wPercent = Mthat.width()/100,
						hPercent = Mthat.height()/100,
						nmap = Mthat.attr('usemap').replace('#', ''),
						c = 'coords';

					map('map[name="' + nmap + '"]').find('area').each(function() {
						var Mthis = map(this);
						if (!Mthis.data(c))
							Mthis.data(c, Mthis.attr(c));

						var coords = Mthis.data(c).split(','),
							coordsPercent = new Array(coords.length);

						for (var i = 0; i < coordsPercent.length; ++i) {
							if (i % 2 === 0)
								coordsPercent[i] = parseInt(((coords[i]/w)*100)*wPercent);
							else
								coordsPercent[i] = parseInt(((coords[i]/h)*100)*hPercent);
						}
						Mthis.attr(c, coordsPercent.toString());
					});
				}).attr('src', Mthat.attr('src'));
			});
		};
		map(window).resize(resizeImgMap).trigger('resize');

		return this;
	};
})(jQuery);
