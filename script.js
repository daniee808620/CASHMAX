let balance = 0;
let referralBonus = 0;
let activityBonus = 0;

function earnMoney(amount) {
    balance += amount;
    activityBonus += amount; // Adds earnings to activity bonus

    document.getElementById("balance").innerText = `₦${balance.toFixed(2)}`;
    document.getElementById("activity").innerText = `₦${activityBonus.toFixed(2)}`;
}

function withdrawFunds() {
    if (balance > 0) {
        alert(`Withdrawal of ₦${balance.toFixed(2)} initiated.`);
        balance = 0;
        activityBonus = 0;

        document.getElementById("balance").innerText = "₦0.00";
        document.getElementById("activity").innerText = "₦0.00";
    } else {
        alert("Insufficient balance.");
    }
}
