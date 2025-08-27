<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ការវាយតម្លៃសមាជិក</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .form-container {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }
        
        .required label:after {
            content: " *";
            color: #e74c3c;
        }
        
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        .date-options {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        
        .date-btn {
            padding: 8px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        
        .date-btn:hover {
            background-color: #2980b9;
        }
        
        .radio-group {
            display: flex;
            gap: 15px;
        }
        
        .radio-option {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .total-score {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            font-weight: bold;
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }
        
        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        
        .submit-btn:hover {
            background-color: #27ae60;
        }
        
        .error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>ការវាយតម្លៃសមាជិក</h1>
        
        <form id="evaluationForm">
            <!-- Date Selection -->
            <div class="form-group">
                <label for="evaluationDate">ថ្ងៃខែឆ្នាំ</label>
                <input type="date" id="evaluationDate" name="evaluationDate" required>
                <div class="date-options">
                    <button type="button" class="date-btn" onclick="setDate('yesterday')">ម្សិលមិញ</button>
                    <button type="button" class="date-btn" onclick="setDate('today')">ថ្ងៃនេះ</button>
                </div>
                <div class="error" id="dateError">សូមជ្រើសរើសថ្ងៃខែឆ្នាំ</div>
            </div>
            
            <!-- Member Name -->
            <div class="form-group required">
                <label for="memberName">ឈ្មោះសមាជិក</label>
                <input type="text" id="memberName" name="memberName" required>
                <div class="error" id="nameError">សូមបំពេញឈ្មោះសមាជិក</div>
            </div>
            
            <!-- Mobile Member Checkbox -->
            <div class="form-group">
                <label>
                    <input type="checkbox" id="isMobileMember" name="isMobileMember">
                    ឈ្មោះសមាជិកចល័តអត់មាននៅក្នុងតារាង
                </label>
            </div>
            
            <!-- Evaluation Questions -->
            <div class="form-group required">
                <label>1. ការគោរពវិន័យ</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="q1-1" name="q1" value="-1" required>
                        <label for="q1-1">-1</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="q1-0" name="q1" value="0" required>
                        <label for="q1-0">0</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="q1+1" name="q1" value="1" required>
                        <label for="q1+1">+1</label>
                    </div>
                </div>
                <div class="error" id="q1Error">សូមជ្រើសរើសពិន្ទុ</div>
            </div>
            
            <!-- Repeat similar structure for questions 2-12 -->
            <!-- Question 2 -->
            <div class="form-group required">
                <label>2. ឯកសណ្ឋាន+ការផាត់មុខ+ការរៀបចំសក់</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="q2-1" name="q2" value="-1" required>
                        <label for="q2-1">-1</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="q2-0" name="q2" value="0" required>
                        <label for="q2-0">0</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="q2+1" name="q2" value="1" required>
                        <label for="q2+1">+1</label>
                    </div>
                </div>
                <div class="error" id="q2Error">សូមជ្រើសរើសពិន្ទុ</div>
            </div>
            
            <!-- Question 3 -->
            <div class="form-group required">
                <label>3. អនាម័យខ្លួនប្រាណ</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="q3-1" name="q3" value="-1" required>
                        <label for="q3-1">-1</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="q3-0" name="q3" value="0" required>
                        <label for="q3-0">0</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="q3+1" name="q3" value="1" required>
                        <label for="q3+1">+1</label>
                    </div>
                </div>
                <div class="error" id="q3Error">សូមជ្រើសរើសពិន្ទុ</div>
            </div>
            
            <!-- Questions 4-12 would follow the same pattern -->
            <!-- I'm including one more as an example -->
            
            <!-- Question 4 -->
            <div class="form-group">
                <label>4. ការរួសរាយរាក់ទាក់</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="q4-1" name="q4" value="-1">
                        <label for="q4-1">-1</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="q4-0" name="q4" value="0">
                        <label for="q4-0">0</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="q4+1" name="q4" value="1">
                        <label for="q4+1">+1</label>
                    </div>
                </div>
            </div>
            
            <!-- Total Score -->
            <div class="total-score">
                <label>សរុបពិន្ទុ:</label>
                <span id="totalScore">0</span>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="submit-btn">ដាក់ស្នើ</button>
        </form>
    </div>

    <script>
        // Set date to yesterday or today
        function setDate(type) {
            const dateInput = document.getElementById('evaluationDate');
            const today = new Date();
            const date = new Date();
            
            if (type === 'yesterday') {
                date.setDate(today.getDate() - 1);
            }
            
            const formattedDate = date.toISOString().split('T')[0];
            dateInput.value = formattedDate;
            document.getElementById('dateError').style.display = 'none';
        }
        
        // Calculate total score
        function calculateTotal() {
            let total = 0;
            
            // Loop through all questions
            for (let i = 1; i <= 12; i++) {
                const selectedOption = document.querySelector(`input[name="q${i}"]:checked`);
                if (selectedOption) {
                    total += parseInt(selectedOption.value);
                }
            }
            
            document.getElementById('totalScore').textContent = total;
        }
        
        // Add event listeners to all radio buttons
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', calculateTotal);
        });
        
        // Form validation
        document.getElementById('evaluationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;
            
            // Validate date
            if (!document.getElementById('evaluationDate').value) {
                document.getElementById('dateError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('dateError').style.display = 'none';
            }
            
            // Validate member name
            if (!document.getElementById('memberName').value.trim()) {
                document.getElementById('nameError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('nameError').style.display = 'none';
            }
            
            // Validate required questions
            for (let i = 1; i <= 3; i++) {
                if (!document.querySelector(`input[name="q${i}"]:checked`)) {
                    document.getElementById(`q${i}Error`).style.display = 'block';
                    isValid = false;
                } else {
                    document.getElementById(`q${i}Error`).style.display = 'none';
                }
            }
            
            if (isValid) {
                // Form is valid, you can submit it here
                alert('ទិន្នន័យត្រូវបានដាក់ស្នើដោយជោគជ័យ!');
                // this.submit(); // Uncomment to actually submit the form
            }
        });
    </script>
</body>
</html>