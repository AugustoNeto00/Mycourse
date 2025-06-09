class Produto: #nó da lista
    def __init__(self, nome):
        self.nome = nome
        self.proximo = None
        
class listaEncadeada:
    def __init__(self):
        self.inicio = None
    
    def nome_produto(self, nome):
        nome = Produto(nome) #O valor do nome sera colocado no valor do nome do nó
        nome.proximo = self.inicio #o valor do proximo nome será colocado no inicio da lista
        self.inicio = nome
    
    def exibir(self):
        atual = self.inicio
        while atual:
            print(atual.nome)
            atual.proximo
            break
lista = listaEncadeada()
lista2 = listaEncadeada()
lista3 = listaEncadeada()
lista.nome_produto("Arroz")
lista2.nome_produto("Feijão")
lista3.nome_produto("Macarrão")

lista.exibir()
lista2.exibir()
lista3.exibir()