$(document).ready(function() {
            var $wrapper = $('.js-services-wrapper');

            $wrapper.on('click', '.js-remove-services', function(e) {
                e.preventDefault();
                $(this).closest('.js-services-item')
                    .fadeOut()
                    .remove();
            });
            $wrapper.on('click', '.js-services-add', function(e) {
                e.preventDefault();

                var prototype = $wrapper.data('prototype');

                var index = $wrapper.data('index');

                var newForm = prototype.replace(/__name__/g, index);

                var $newItem = jQuery('<div/>', {
                    class: 'w-25 js-services-item'
                });

                var $deletelink = $('<div class="d-flex justify-content-center"><a href="#" class="btn btn-danger js-remove-services"><i class="fa fa-times"></i> Delete</a></div>');

                $newItem.html(newForm);
                $deletelink.appendTo($newItem);

                $wrapper.data('index', index + 1);

                $(this).parent().before($newItem);
            });
});
