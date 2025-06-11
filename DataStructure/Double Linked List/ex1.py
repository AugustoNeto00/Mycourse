class DoubleNode:
    def __init__ (self, val):
        self.val = val
        self.next = None
        self.previus = None

class DoubleLinkedList:
    def __init__(self):
        self.start = None
        self.end = None
    
    def insertatStart(self, val):
        new_node = DoubleNode() #create a new object of the node
        if self.start is None: 
            self.start = self.end = new_node
        else:
            self.next = self.end #The value of the next goes to the start of the D.L.L
            self.start.previus = new_node
            self.start = new_node
        


list = DoubleLinkedList()
No1 = DoubleNode("João")        
No2 = DoubleNode("Marina")        
No3 = DoubleNode("Pedro")        
