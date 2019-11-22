ARCHIVE = ProjetBDD

all:

zip:
	zip -r $(ARCHIVE).zip Annexe Site Modele

tar:
	tar -cvf $(ARCHIVE).tar Annexe Site Modele

clean:
	rm -rf $(ARCHIVE).zip $(ARCHIVE).tar
