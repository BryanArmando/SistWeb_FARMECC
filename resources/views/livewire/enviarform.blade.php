<div class="container columna2 pt-3" style="border-radius: 25px">
    <p class="font-bold" style="font-size: 25px; color:#eeeeee"><i class="fa-solid fa-window-maximize" style="font-size:25px"></i> Enviar Mensaje</p>
    <p class="font-bold" style="font-size: 15px; color:#eeeeee">Si deseas envía un mensaje personalizado a los desarrolladores. Ingresa los datos.</p>
    <form target="_blank" action="https://formsubmit.co/diana.almeida01@epn.edu.ec" method="POST" class="pb-3">
      <div class="form-group">
        <div class="form-row">
          <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Tu nombre..." required  onfocus="javascript:select();">
          </div>
          <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Tu dirección de correo electrónico..." required  onfocus="javascript:select();">
          </div>
        </div>
      </div>
      <div class="form-group">
        <textarea placeholder="Mi requerimiento es..." class="form-control" name="message" rows="5" required  onfocus="javascript:select();"></textarea>
      </div>
      <br>
      <button type="submit" class="  btn btn-dark btn-block">Enviar</button>
      <input type="hidden" name="_next" value="http://web-farmecc.herokuapp.com/password/reset">
      <input type="hidden" name="_captcha" value="false">
    </form>
</div>