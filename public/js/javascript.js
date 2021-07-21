console.log("oi, estou aqui")

//
//<div class="col-md-6">
//<label for="inputEmail4" class="form-label">Email</label>
//<input type="email" class="form-control" id="inputEmail4">
//</div>
//
// <h1 class="title-page">Entendendo a árvore</h1>
//<p id="paragrafo">
//Quando criamos um repositório Git, criamos também uma árvore (tree). O código do projeto
//inicial é um branch (galho), e a partir dele é possível criar novos branches, cada branch criado é uma cópia exata do seu branch pai no momento da criação. A criação de novos branches normalmente ocorre quando uma nova alteração no código precisa ser realizada. De modo que as alterações que o desenvolvedor realizar em uma branch serão salvas apenas nesta branch.

//</p>

// como buscar e pegar elemento na DOM

// document.getElementById('');

// const elemento = document.getElementById('paragrafo')

// console.log(elemento)

//   document.getElementById (Element)
//   document.getElementsByClassName (HTMLCollection)
//   document.getElementsByTagName (HTMLCollection)
//   document.querySelector (Element)
//   document.querySelectorAll (NodeList)


//
//  const element = document.querySelector("p")

//  element.textContent = "ola, olha eu aqui no content" // aqui ele modifica

//  element.textContent += " ola, olha eu aqui no content" // aqui ele add 

//const element = document.querySelector('h1')
//element.innerText = "innertext"
//element.textContent += " - ola, olha eu aqui no content"

//element.innerHTML += "<br> <div>vamos começar com uma div</div>"

//const main = document.querySelector('main')
//main.setAttribute('id', 'rg')

//const mainID = document.querySelector('#rg')
//console.log(mainID)

////const main = document.querySelector('main')
////main.setAttribute('id', 'rg') // add um atributo

//console.log(main.getAttribute('id')) // mostrei o atributo

//main.removeAttribute('id') // removi o atributo



const elementbody = document.querySelector('body')
elementbody.style.backgroundColor = "#f9f3d2"

//const element = document.querySelector('body')

//element.classList.add('active')

// console.log(element.classList)

//element.classList.toggle('active') // toggle se tiver active ele remove se nao tiver ele add

//const h1 = document.querySelector('h1');

//h1.addEventListener('click', print) // print é so um variavel, poderia ser qualquer nome

//function print() {
//    console.log('print')  
//}

