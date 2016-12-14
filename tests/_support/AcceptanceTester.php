<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */

    /**
     * @Given I have product with $:num1:num2:num2 price in my cart
     */
    public function iHaveProductWithPriceInMyCart($num1, $num2, $num3)
    {
        throw new \Codeception\Exception\Incomplete("Step `I have product with $:num1:num2:num2 price in my cart` is not defined");
    }


    /**
     * @When I go to checkout process
     */
    public function iGoToCheckoutProcess()
    {
        throw new \Codeception\Exception\Incomplete("Step `I go to checkout process` is not defined");
    }

    /**
     * @Then I should see that total number of products is :num1
     */
    public function iShouldSeeThatTotalNumberOfProductsIs($num1)
    {
        throw new \Codeception\Exception\Incomplete("Step `I should see that total number of products is :num1` is not defined");
    }

    /**
     * @Then my order amount is $:num1:num2:num3:num3
     */
    public function myOrderAmountIs($num1, $num2, $num3, $num4)
    {
        throw new \Codeception\Exception\Incomplete("Step `my order amount is $:num1:num2:num3:num3` is not defined");
    }
}
