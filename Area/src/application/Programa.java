package application;

import java.util.Locale;
import java.util.Scanner;

public class Programa {

	public static void main(String[] args) {
		
		Locale.setDefault(Locale.US);
		Scanner sc = new Scanner(System.in);
		
		System.out.printf("Informe a largura: ");
		double largura = sc.nextDouble();
		
		System.out.printf("Informe o comprimento: ");
		double comprimento = sc.nextDouble();
		
		System.out.printf("Informe o valor do metro quadrado: ");
		double metroQuadrado = sc.nextDouble();
		
		double area  = largura * comprimento;
		double preco = area * metroQuadrado;
		
		System.out.printf("A area e de: %.1f%n", area);
		System.out.printf("O preco e de: %.1f%n", preco);
		
		sc.close();
	}
}