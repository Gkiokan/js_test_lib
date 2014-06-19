<?

?>

<!DOCTYPE>
<html>
    <head>
        <title>Js test Lib</title>
        <style>
            body { font-family: sans-serif; }
            .t { border: 1px solid green; }
            
            
        </style>
    </head>
    <body>
        <h1>Javascript Test Library </h1>
        
        <div class='t' id='test'>Test ID Container</div>
        <br>
        <div class='t' id='test2'>Test ID 2 Container</div>
        
        
        <br>
        <div class='debug'>Debug code?!</div>
        <script>
            (function () {
                var plug = function(params){
                    return new Library(params);
                }
                
                var Library = function(params){
                    var selector  = document.querySelectorAll(params),
                    i = 0;
                    this.length = selector.length;
                    this.version = '0.1.0';
                    this.url = '???';
                    
                    for (i;i<this.length;i++){
                        this[i] = selector[i];
                    }
                    return this;
                }
                
                plug.fn = Library.prototype = {
                    hide: function(){
                        var len = this.length;
                        while(len--){                            
                            this[len].style.display = 'none'
                        }
                    },
                    show: function(){
                        var len = this.length;
                        while(len--){
                            this[len].style.display = 'block'
                        }
                    },
                    init: function(){ console.log('init'), console.log(this); },
                    debug: function(d){
                        var len = this.length;
                        if (!d) d=""; else d=d;
                        
                        while (len--){
                            var debug_target = this[len];
                            var debug_content = debug_target.innerHTML;
                            var new_content = debug_target.innerHTML = d+'<br>'+debug_content;
                            console.log(new_content);
                        }
                    },
                    push: function(){
                        var len = this.length;
                        while(len--){
                            var obj = this[len];
                            document.querySelectorAll('.debug').innerHTML(obj);
                        }
                    }
                }
                
                if (!window.plug){
                    window.plug = plug;
                    window.p = plug;
                    console.log('js test library loaded ... ');
                }
                
            })();
            
        </script>
        
        
    </body>
</html>