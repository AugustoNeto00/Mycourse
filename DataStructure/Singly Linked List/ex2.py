class Hamburguer:
    def __init__(self):
        self.ingredientes = [] #'settando' que a variavel existe

    def add_ingrediente(self, ingrediente):
        self.ingredientes.append(ingrediente)
        print(f"ingrediente adicionado {(ingrediente)}.")
    
    def exibir_ingrediente(self):
        if len(self.ingredientes) > 0:
            print(self.ingredientes)
        else:
            print("não há ingredientes.")

    def remover_ingrediente(self):
        if len(self.ingredientes) > 0:
            self.ingredientes.pop()
        else:
            print("não há ingredientes para serem adicionados.")

# TESTE   
RUN = True #variavel que carrega o valor true
# Objeto
chef = Hamburguer()




while RUN: #enquanto o comando for verdadeiro o loop continuará
    print("1 - Adicionar ingrediente \n" \
    "2 - remover ingrediente \n" \
    "3 - exibir ingredientes \n"
    "0 - sair")
    escolha = int(input("->: "))
    if escolha == 1:
        ingrediente = str(input("Digite seu ingrediente: "))
        chef.add_ingrediente(ingrediente)
    elif escolha == 2:
        chef.remover_ingrediente()
    elif escolha == 3:
        chef.exibir_ingrediente()
    elif escolha == 0:
        break