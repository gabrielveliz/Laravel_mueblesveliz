@extends('layout')

@section('content')
<div class="contenido">
<div class="contacto">
<ul> 

    <li><h2>Contacto</h2></li>

 
    <li><p>Telefono Fijo: 225514519</p></li>
    <li><p>Celular: +56976285473</p></li>
    <li><p>Mail: muebles.veliz86@gmail.com</p></li>

    <br>
    <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                         consectetur adipisicing elit. Dolore, ea!
                    </p>
                    <div class="contact-form">
                        <form id="contact-form" method="#" action="#" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                            </div>
                            
                            <div id="success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>
                            
                            <div id="error" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>
                            
                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                            </div>                      
                        </form>
                    </div>
                </div>
            </div>
     <li><h1>Pagina Facebook</h1></li>
    <li><div class="fb-page" data-href="https://www.facebook.com/mueblesycolchonesveliz/" data-tabs="timeline"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mueblesycolchonesveliz/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mueblesycolchonesveliz/">Muebles Veliz</a></blockquote></div></li>
    
    
    
    

    
</ul>
</div>
      

</div>
@stop