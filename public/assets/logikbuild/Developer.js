LogikBuild.modules.Developer = {

    name : null,
    email : null,
    title : null,

    initialize : function() {
        console.log('Init Developer module');
        this.checkConfig();
        this.updateUIMapping();
    },

    checkConfig : function() {

        this.name = window.localStorage.getItem('Developer.Name');
        this.email = window.localStorage.getItem('Developer.Email');
        this.title = window.localStorage.getItem('Developer.Title');

        if (!this.name || !this.email) {
            this.showConfigDialog();
        }

    },

    showConfigDialog : function() {
      
        $('#developerName').val(this.name);
        $('#developerEmail').val(this.email);
        $('#developerTitle').val(this.title);

        var myModal = new bootstrap.Modal(document.getElementById('developerInfoDialog'));
        myModal.show();

    },

    saveConfig : function() {

        this.name = $('#developerName').val();
        window.localStorage.setItem('Developer.Name', $('#developerName').val());

        this.email = $('#developerEmail').val();
        window.localStorage.setItem('Developer.Email', $('#developerEmail').val());

        this.title = $('#developerTitle').val();
        window.localStorage.setItem('Developer.Title', $('#developerTitle').val());                    
        
        this.updateUIMapping();
    },

    updateUIMapping : function() {
        $('[data-ui-mapping="Developer.Name"]').html(this.name);
        $('[data-ui-mapping="Developer.Title"]').html(this.title);
        $('[data-ui-mapping="Developer.Image"]').css('background-image', 'url(https://www.gravatar.com/avatar/' + CryptoJS.MD5(this.email).toString() + '?d=mp)');        
    },

};