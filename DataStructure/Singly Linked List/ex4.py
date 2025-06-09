class PilhaDeCartas:
    def __init__(self):
        self.pilha = []  # Inicializa a pilha vazia
    
    def add_carta_topo(self, carta):
        # Adiciona a carta ao topo da pilha
        self.pilha.append(carta)
        print(f"Carta {carta} adicionada ao topo.")
    
    def puxar_carta(self):
        if self.pilha:  # Verifica se a pilha não está vazia
            carta = self.pilha.pop()  # Retira a carta do topo
            print(f"Carta {carta} virada.")
        else:
            print("Não há cartas na pilha.")

# TESTE
RUN = True
baralho = PilhaDeCartas()

while RUN:
    print("\n1 - Adicionar carta ao topo\n" \
          "2 - Puxar carta do topo\n" \
          "3 - Sair\n")
    
    try:
        escolha = int(input("Escolha uma opção: "))
    except ValueError:
        print("Escolha inválida! Tente novamente.")
        continue
    
    if escolha == 1:
        carta = input("Digite o nome da carta: ")
        baralho.add_carta_topo(carta)
    elif escolha == 2:
        baralho.puxar_carta()
    elif escolha == 3:
        RUN = False
        print("Saindo do jogo...")
    else:
        print("Escolha inválida! Tente novamente.")
