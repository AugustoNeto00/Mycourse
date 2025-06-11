class Labirinto:
    def __init__(self):
        # A pilha armazena as direções que o jogador toma
        self.passo = []
    
    def andar(self, direcao):
        # Adiciona a direção na pilha (empilhar)
        self.passo.append(direcao)
        print(f"You moved {direcao}")
    
    def voltar_passo(self):
        if len(self.passo) > 0:
            # Desempilha a última direção
            ultima_direcao = self.passo.pop()
            print(f"You went back to {ultima_direcao}")
        else:
            print("You're at the starting point. Can't go back.")

# TESTE
RUN = True
jogador = Labirinto()

while RUN:
    print("1 - Andar (direção) \n" \
          "2 - Voltar um passo \n" \
          "3 - Sair \n")
    
    try:
        escolha = int(input("Escolha uma opção: "))
    except ValueError:
        print("Escolha inválida! Tente novamente.")
        continue
    
    if escolha == 1:
        direcao = input("Digite a direção (cima, baixo, esquerda, direita): ").lower()
        jogador.andar(direcao)
    elif escolha == 2:
        jogador.voltar_passo()
    elif escolha == 3:
        RUN = False
        print("Saindo do labirinto...")
    else:
        print("Escolha inválida! Tente novamente.")