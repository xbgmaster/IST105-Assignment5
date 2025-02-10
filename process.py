import sys
import math
import random

def number_puzzle(number):
    if number % 2 == 0:
        result = f"The number is even. Its square root is {math.sqrt(number):.2f}."
    else:
        result = f"The number is odd. Its cube is {number ** 3}."
    return result

# convert text to binary and count vowels
def text_puzzle(text):
    binary_text = ''.join(format(ord(c), '08b') for c in text)
    vowels = "aeiouAEIOU"
    vowel_count = sum(1 for char in text if char in vowels)
    return binary_text, vowel_count

# Function to simulate the treasure hunt
def treasure_hunt():
    target_number = random.randint(1, 100)
    attempts = 0
    max_attempts = 5
    while attempts < max_attempts:
        # Simulate a guess
        guess = random.randint(1, 100)
        attempts += 1
        if guess == target_number:
            return f"Perfect! You guessed the number {target_number} in {attempts} attempts!"
    return f"Sorry :( ! You couldn't guess the number {target_number} within {max_attempts} attempts. Try again!"

# Main program
if __name__ == "__main__":
    # Get the input values passed from PHP
    number = int(sys.argv[1])
    text = sys.argv[2]

    # Task 1: Number Puzzle
    number_result = number_puzzle(number)

    # Task 2: Text Puzzle
    binary_text, vowel_count = text_puzzle(text)

    # Task 3: Treasure Hunt
    treasure_result = treasure_hunt()

    # Output all results
    print(number_result)
    print(f"Binary of the text: {binary_text}")
    print(f"Number of vowels in the text: {vowel_count}")
    print(treasure_result)