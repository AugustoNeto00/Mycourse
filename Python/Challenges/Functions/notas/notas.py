def calcular_media(n1, n2, n3, n4):
    media = (n1 + n2 + n3 + n4) / 4

    if media >= 7:
        return "aprovado"
    elif media >= 4:
        return "recuperação"
    else:
        return "reprovado"