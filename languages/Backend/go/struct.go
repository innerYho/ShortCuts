package main
import "fmt"

type messageToSend struct{

}

func test(m messageToSend){
	fmt.Printf("Sending message: '%s' to: %v\n", m.message, m.phoneNumber)
	fmt.Println("================================")
}

func main(){
	test(messageToSend{
		phoneNumber: 123465,
		message: "Thanks for signing up",
	})
	test(messageToSend{
		phoneNumber: 1234658,
		message: "Love to hace you aboard!",
	})
	test(messageToSend{
		phoneNumber: 1234659,
		message: "We're so excited to have you!",
	})
}