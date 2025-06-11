class Node:
    def __init__(self, val):
        self.val = val
        self.next = None

class List:
    def __init__ (self):
        self.start = None
    
    def insert_start(self, val):
        insert = val
        insert.next = self.start
        self.start = insert

        
    def show_name(self):
        name = self.start
        string = ""
        while name:
            string += str(name.val)
            if name.next:
                string += " -> "
            name = name.next
        return string
    
    def counter(self):
        count = 0
        current = self.start
        while current:
            count += 1
            current = current.next
        return count
        

lista = List()
lista.insert_start(Node("C"))
lista.insert_start(Node("B"))
lista.insert_start(Node("A"))

print(lista.show_name())
print(lista.counter())