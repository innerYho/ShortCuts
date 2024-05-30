package main
import{
	"fmt"
	"time"
}
func sendEmail(message string){
	func(){  //1
		// go func(){  //2
		time.Sleep(time.Millisecond * 250)
		fmt.Printf("Email received: '%s'\n", message)
	}()
	fmt.Printf("Email sent: '%s'\n", message)
}

func test(message string){
	sendEmail(message)
	time.Sleep(time.Millisecond * 500)
	fmt.Println("========================")
}

func main() {
	test("Hello there Stacy!")
	test("Hi there John!")
	test("Hey there Jane!")
}