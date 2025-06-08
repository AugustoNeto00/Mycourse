def calcular_desconto(cliente, valor_compra):
    if cliente == "VIP":
        desconto = valor_compra * 0.2 if valor_compra > 1000 else valor_compra * 0.1
    elif cliente == "REGULAR":
        desconto = valor_compra * 0.15 if valor_compra > 1000 else valor_compra * 0.05
    else:
        desconto = 0
        
    return valor_compra - desconto

def gerar_relatorio_financeiro(dados):
    total_receitas = sum(item["valor"] for item in dados if item["tipo"] == "receita")
    total_despesas = sum(item["valor"] for item in dados if item["tipo"] == "despesa")
    saldo_final = total_receitas - total_despesas

    print("Relatório Financeiro:")
    print(f"Total de Receitas: {total_receitas}")
    print(f"Total de Despesas: {total_despesas}")
    print(f"Saldo Final: {saldo_final}")

    if saldo_final < 0:
        print("Atenção: O saldo está negativo!")
    elif saldo_final == 0:
        print("Saldo neutro.")
    else:
        print("Saldo positivo.")

# Exemplo de uso:
dados = [
    {"tipo": "receita", "valor": 2000},
    {"tipo": "despesa", "valor": 1500},
    {"tipo": "receita", "valor": 500}
]

gerar_relatorio_financeiro(dados)

#explicações: 
#in portuguese:
#	*Uso da compreensão de lista, deixando o codigo mais limpo, mais claro,resumido em apenas 2 linhas utilizando a função sum() que soma os valores que 	estão na função.
#	*Uso de Fstring para formatar as variaveis diretamente dentro de uma string, que faz com que seja mais legivel e não de erros
#in english:
#	*i Use of list comprehension, making the code cleaner, clearer, summarized in just 2 lines using the sum() function that sums the values that are in the function.
#	*i Use of Fstring to format the variables directly within a string, which makes it more readable and error-free