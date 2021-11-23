<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>




## Machine learing and laravel8 Spam detection classfication

This project show how you can call  NLP model API from Algorithmia MLOps using Algorithmia PHP Client to detect spam text meessage.
Laravel is a web application framework with expressive, elegant syntax and Algorithmia.com makes machine learning models to be easily deployed by the language of your choice
## Set Up
Part 1
1.Run the NLP Spam Message Classification .ipynb using jupyter and make sure it working propery and models are produced
part2
Step 1: Create an Account on Algorithmia
The first step is to create an account in Algorithmia by visiting this page: https://algorithmia.com/signup.

Step 2: Create a New Algorithm
After creating and confirming your account and email, the next step is to create a new algorithm by clicking the dropdown menu button named "Create New". Then you just select Algorithm at the top right corner of the page.


Then enter the algorithm's name, for example SMS SPAM DETECTION. In the source code section you can determines where your algorithm's source code will live.

By default source code will be on the Algorithmia platform. You can choose to keep it on GitHub, but for this article we will use the default option.

The next section specifies the environment. Algorithmia gives you different options to select different environment such as Python, R, JavaScript, Java and Scala. The default option is Python 3.X, and here we will continue with this option. Finally, click the "Create new Algorithm" button.

Step 3: Upload the pre-trained Model & CountVectorizer to Algorithmia
You can upload your selected model to the data section by clicking Data Sources on the left panel of the Algorithmia platform. Then click the My hosted data directory where you can create a new folder to keep all your uploaded pkl files for this specific algorithm.

Inside the "My hosted data" directory I created a new folder called sms_spam_detection. Then I uploaded our pre-trained model and trained CountVectorizer to convert text messages (sms) to a vector of term/token counts.


Step 4: Add the source code
After uploading our pre-trained model, click on the Source Code tab. It will open an IDE where you add the source code to run the machine learning model we created. 
Step 5: Add Dependencies to Algorithmia
Click the dependencies tab from the UI and add the following packages that our model relies on:

numpy
joblib
scikit-learn == 0.22.2.post1
unidecode
nltk == 3.5
Then  click save dependencies in the bottom right corner

Step 6: Publish the Algorithm
Our last step is to publish the algorithm. There are 3 steps to publishing an algorithm: documenting all changes, adding example input and output, and configuring the algorithm settings.

(a) Document Changes
You will see your commit history and you'll be able to add a release note.


(b) Add an Example
In this section you create your sample input and output so that users can try your algorithm.


(c) Configure Algorithm settings
Lastly, you select if your algorithm will be public (which means anyone can call it) or private (which means only owners can call it). You also need to set the royalty and then click the publish button at the bottom of the page.
part 3
2.Install Algorthimia PHP client

composer require algorithmia/algorithmia

Then run this command to regenerate the list of all classes that need to be included in this project. This will also include new classes from the algorithimia package we have installed.

composer dumpautoload

3.Run Our Laravel Application
We can start the server by using the below command from the project directory.
 php artisan serve

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
