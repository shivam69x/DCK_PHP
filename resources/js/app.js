// This will be your main JavaScript file.
import './scroll_to_top';

window.handleScroll = (id) => {
    const element = document.getElementById(id);
    if (element) {
        element.scrollIntoView({ behavior: "smooth" });
    }
};

// Global currency state and conversion for Blade/Alpine.js
window.selectedCurrency = 'INR'; // Default or set from Laravel backend
window.conversionRate = 0.012; // Example: ₹1 = $0.012

window.convertPrice = (priceInINR) => {
    if (window.selectedCurrency === 'INR') return `₹${priceInINR}`;
    return `$${(priceInINR * window.conversionRate).toFixed(2)}`;
};
