/* Fazer um programa que calcule o salário líquido.
    Serão fornecidos o valor da hora aula, número
    de aulas dadas e a % de desconto do INSS.*/

var valorHoraAula = parseFloat(prompt("Insirao valor da hora aula: "));
var numeroAulasDadas = parseFloat(prompt("Insira o número de aulas dadas: "));
var descontoINSS = parseFloat(prompt("Insira a % de desconto do INSS: "));
var descontoINSS = (descontoINSS / 100)

var salarioBruto = (valorHoraAula * numeroAulasDadas);
var salarioLiquido = (salarioBruto - (salarioBruto * descontoINSS))

alert("Seu salário líquido é: R$ " + salarioLiquido);

