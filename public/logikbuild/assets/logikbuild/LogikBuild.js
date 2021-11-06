var LogikBuild = {

    modules : {},

    initialize : function() {
        console.log('LogikBuild init');
        console.log(this.modules);
        for(var x in this.modules) {
            if (this.modules[x].initialize) {
                console.log('LogikBuild init module ' + x);
                this.modules[x].initialize();
            }
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


    },


    showToast : function(title, message) {

        $('#toastTitle').html(title);
        $('#toastMessage').html(message);

        $('#toastDialog').toast({
            delay : 3000
        }).toast('show');

    },

};