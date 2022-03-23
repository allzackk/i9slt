document.querySelector("#submit").addEventListener("click", e => {
    e.preventDefault();
  
    //INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
    let telefono = "556295209548";
  
    let cliente = document.querySelector("#cliente").value;
    let beneficio = document.querySelector("#beneficio").value;
    let hora = document.querySelector("#hora").value;
    let empleado = document.querySelector("#empleado").value;
    let servicio = document.querySelector("#servicio").value;
    let resp = document.querySelector("#respuesta");
  
    resp.classList.remove("fail");
    resp.classList.remove("send");
  
    let url = `https://api.whatsapp.com/send?phone=${telefono}&text=
          *Formulário K3CRED*%0A
          *Consulta*%0A%0A
          *Nome?*%0A
          ${cliente}%0A
          *Benefício a consultar*%0A
          ${beneficio}%0A
          *Melhor horário para contato*%0A
          ${hora}%0A
          *Consultor de preferencia*%0A
          ${empleado}%0A
          *Valor desejado*%0A
          ${servicio}`;
  
    if (cliente === "" || beneficio === "" || hora === "") {
      resp.classList.add("fail");
      resp.innerHTML = `Faltam alguns dados, ${cliente}`;
      return false;
    }
    resp.classList.remove("fail");
    resp.classList.add("send");
    resp.innerHTML = `Cadastro efetuado, ${cliente}`;
  
    window.open(url);
  });