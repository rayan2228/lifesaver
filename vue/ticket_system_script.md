### This File we see that full ticket system script code

````

<script>
export default {
    name: "Ticket",
    data() {
        return {
            seats: [{
                    name: "A1",
                    position: "available",
                    price: 550,
                    type: "business"
                },
                {
                    name: "A2",
                    position: "available",
                    price: 550,
                    type: "business"
                },
                {
                    name: "B1",
                    position: "available",
                    price: 550,
                    type: "business"
                },
                {
                    name: "B2",
                    position: "available",
                    price: 550,
                    type: "business"
                },
                {
                    name: "A3",
                    position: "available",
                    price: 550,
                    type: "business"
                },
                {
                    name: "A4",
                    position: "available",
                    price: 550,
                    type: "business"
                },
                {
                    name: "B3",
                    position: "available",
                    price: 550,
                    type: "business"
                },
                {
                    name: "B4",
                    position: "available",
                    price: 550,
                    type: "business"
                },
                {
                    name: "A5",
                    position: "available",
                    price: 700,
                    type: "premium"
                },
                {
                    name: "A6",
                    position: "available",
                    price: 700,
                    type: "premium"
                },
                {
                    name: "B5",
                    position: "available",
                    price: 700,
                    type: "premium"
                },
                {
                    name: "B6",
                    position: "available",
                    price: 700,
                    type: "premium"
                },
                {
                    name: "A7",
                    position: "available",
                    price: 500,
                    type: "economy"
                },
                {
                    name: "A8",
                    position: "available",
                    price: 500,
                    type: "economy"
                },
                {
                    name: "B7",
                    position: "available",
                    price: 500,
                    type: "economy"
                },
                {
                    name: "B8",
                    position: "available",
                    price: 500,
                    type: "economy"
                },
                {
                    name: "A9",
                    position: "available",
                    price: 500,
                    type: "economy"
                },
                {
                    name: "A0",
                    position: "available",
                    price: 500,
                    type: "economy"
                },
                {
                    name: "B9",
                    position: "available",
                    price: 500,
                    type: "economy"
                },
                {
                    name: "B0",
                    position: "available",
                    price: 500,
                    type: "economy"
                },
                {
                    name: "C1",
                    position: "available",
                    price: 300,
                    type: "normal"
                },
                {
                    name: "C2",
                    position: "available",
                    price: 300,
                    type: "normal"
                },
                {
                    name: "C3",
                    position: "available",
                    price: 300,
                    type: "normal"
                },
                {
                    name: "C4",
                    position: "available",
                    price: 300,
                    type: "normal"
                },
            ],
            applyCoupon: null,
            couponCode: "",
            coupons: [{
                    code: "100NAYAN",
                    discount: 100
                },
                {
                    code: "250WASIM",
                    discount: 250
                },
            ],
            username: "",
            contact: "",
            authuser: ""
        }
    },
    methods: {
        handleClick(i) {
            console.log(this.seats[i]);
            let catchseat = this.seats[i];
            if (catchseat.position === "booked" || catchseat.position === "sold") {
                alert('you cannot select this seats')
            } else {
                if (this.selectSeat.length > 2) {

                    alert('you cannot select more then 3 seats')
                } else {

                    catchseat.position = catchseat.position === 'available' ? 'select' : 'available'
                }
            }
        },
        submit() {
            if (this.username === "" && this.contact === "") {
                alert('input field cannot be null')
            } else {
                this.selectSeat.map((seat) => seat.position = "sold")
                this.applyCoupon = null
                this.couponCode = ""
            }
        },
        booked() {
            if (this.username === "" && this.contact === "") {
                alert('input field cannot be null')
            } else {
                this.selectSeat.map((seat) => seat.position = "booked")
                this.applyCoupon = null
                this.couponCode = ""
            }
        },
        logout() {
            localStorage.removeItem('users')
            this.$router.push({
                name: "Login"
            })
        }
    },
    computed: {
        selectSeat() {
            let totalSelectSeat = this.seats.filter((item) => item.position === 'select')
            return totalSelectSeat
        },
        totalCost() {
            let price = 0
            this.selectSeat.forEach((seat) => {
                price += seat.price
            })

            if (this.applyCoupon !== null) {
                price = price - this.applyCoupon.discount
            }
            return price
        }
    },
    watch: {
        couponCode(newValue, oldValue) {
            if (newValue.length > 7) {
                let searchCode = this.coupons.filter((item) => item.code == newValue)
                if (searchCode.length === 1) {
                    this.applyCoupon = searchCode[0]
                    this.couponCode = ''
                } else {
                    this.couponCode = oldValue
                    alert('coupon not valid')
                }
            }
        }
    },
    mounted() {
        let getData = localStorage.getItem('users')
        if (!getData) {
            this.$router.push({
                name: "Registration"
            })
        } else {
            let selectAuth = JSON.parse(localStorage.getItem('users'))
            this.authuser = selectAuth.name

            this.$router.push({
                name: "Ticket"
            })
        }
    }
}
</script>

````