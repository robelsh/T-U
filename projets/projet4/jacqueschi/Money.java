
public class Money {

	float amount;
	String currency;
	
	//Constructeur sans arguments.
	public Money(){
		this.amount = 0;
		this.currency = "EUR";
	}
	
	//Constructeur avec arguments.
	public Money (float amount, String currency){
		this.amount = amount;
		this.currency = currency;
	}
	
	//Getter. Renvoie le montant.
	public float getAmount(){
		return this.amount;
	}
	
	//Getter. Renvoie la chaine de caractère de la devise.
	public String getCurrency(){
		return this.currency;
	}
	
	//Permet de vérifier que la devise de l'objet this est identique � la devise d'un objet Money passé en paramètre. 
	//Renvoie true si vrai, faux sinon.
	public boolean checkCurrency(Money m){
		if (m.currency == this.currency){
			return true;
		}
		
		else {
			return false;
		}
		
	}
	
	//Permet de vérifier que la devise de l'objet this est identique à la chaine de caractères passée en paramètre.
	//Renvoie true si vrai, faux sinon.
	public boolean checkCurrency(String s){
		if (s == this.currency){
			return true;
		}
		
		else {
			return false;
		}
	}
	
	//Permet de changer la devise de this en celle indiquée par le paramètre s.
	//Pour cela on applique le taux de conversion (rate) passé en paramètre.
	public void changeCurrency(String c, float rate){
		this.amount = this.amount * rate;
		this.currency = c;
	}
	
	//Ajoute le montant amount au montant de this
	public void add(float amount){
		this.amount += amount;
	}
	
	//Soustrait le montant amount au montant de this
	public void sub(float amount){
		this.amount -= amount;
	}
	
	//Ajoute le montant de la devise m à this si et seulement si les deux devises sont identiques
	public void add(Money m){
		if (checkCurrency(m)){
			//if (isPositive(m.amount)){
				this.amount += m.amount;
			//}	
		}
	}
	
	//Soustrait le montant de la devise m à this si et seulement si les deux devises sont identiques
	public void sub(Money m){
		if (checkCurrency(m)){
			//if (isPositive(m.amount)){
				this.amount -= m.amount;
			//}	
		}
	}
	
	//Renvoie un formattage de this permettant d'afficher le montant et la devise de this
	public String toString(){
		return this.amount + this.currency;
	}
	
	//Test si la valeur est positive.
	/*
	public boolean isPositive(float amount){
		if(amount < 0){
			return false;
		}
		
		else {
			return true;
		}
	}
	*/
	
	}